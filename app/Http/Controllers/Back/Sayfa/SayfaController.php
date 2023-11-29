<?php

namespace App\Http\Controllers\Back\Sayfa;

use App\Http\Controllers\Controller;
use App\Models\Back\Sayfa\Sayfa;
use App\Models\Back\Sayfa\SayfaKategori;
use Illuminate\Http\Request;

class SayfaController extends Controller
{
    public function sayfalar()
    {
        $search = request()->get('search');
        $sayfalar = Sayfa::where('aktif', 1)->where('baslik', 'like', "%$search%")->orderBy('id', 'desc')->paginate(10);
        return view('back.sayfa.sayfalar', compact('sayfalar'));
    }

    public function sayfaEkle()
    {
        return view('back.sayfa.sayfa-ekle');
    }

    public function sayfaDuzenle($uuid)
    {
        $uuid = $uuid;
        return view('back.sayfa.sayfa-duzenle', compact('uuid'));
    }

    public function sayfaDuzenleEditor($uuid)
    {
        $sayfa = Sayfa::where('uuid', $uuid)->firstOrFail();
        return view('back.sayfa.sayfa-duzenle-editor', compact('sayfa'));
    }

    public function sayfaGuncelle(Request $request, $uuid)
    {
        $sayfa = Sayfa::where('uuid', $uuid)->firstOrFail();
        $find = ['<body', '</body>'];
        $replace = ['<div', '</div>'];
        $content = str_replace($find, $replace, $request->icerik);
        $content .= '<style>' . $request->css . '</style>';
        $sayfa->editor_icerik = $content;
        $sayfa->save();
    }

    public function sayfaSil($uuid)
    {
        $dil = Sayfa::where('uuid', $uuid)->firstOrFail();
        $dil->deleted_by = auth()->guard('admin')->user()->id;  // Soft delete için silen kişinin id'si
        $dil->save();
        $dil->delete();
        toastr()->success('Sayfa başarıyla silindi.', 'Başarılı');
        return redirect()->back();
    }
}
