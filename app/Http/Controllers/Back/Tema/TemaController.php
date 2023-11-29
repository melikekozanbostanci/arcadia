<?php

namespace App\Http\Controllers\Back\Tema;

use App\Http\Controllers\Controller;
use App\Models\Back\Tema\Sablon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TemaController extends Controller
{
    public function sablonlar()
    {
        $sablonlar = Sablon::all();
        return view('back.tema.sablonlar', compact('sablonlar'));
    }

    public function sablonKaydet(Request $request)
    {
        $sablon = new Sablon();
        $sablon->uuid = Str::uuid();
        $sablon->baslik = $request->baslik;
        $sablon->slug = Str::slug($request->baslik);
        $sablon->save();
        return redirect()->route('admin.sablonlar');
    }

    public function sablonDuzenle($uuid)
    {
        $sablon = Sablon::where('uuid', $uuid)->first();
        return view('back.tema.sablon-editor', compact('sablon'));
    }

    public function sablonGuncelle(Request $request, $uuid)
    {
        $sayfa = Sablon::where('uuid', $uuid)->firstOrFail();
        $find = ['<body', '</body>'];
        $replace = ['<div', '</div>'];
        $content = str_replace($find, $replace, $request->icerik);
        $content .= '<style>' . $request->css . '</style>';
        $sayfa->short_code = "<x-sablonlar id='$sayfa->id' />";
        $sayfa->sablon = $content;
        $sayfa->save();
    }
}
