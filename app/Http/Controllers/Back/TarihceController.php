<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Back\Tarihce;

class TarihceController extends Controller
{
    public function index()
    {
        $search = request()->get('search');
        $tarihce = Tarihce::where('baslik', 'like', "%$search%")
            ->orWhere('yil', 'like', "%$search%")
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('back.tarihce.tarihce', compact('tarihce'));
    }
    public function tarihceEkle(){
        return view('back.tarihce.tarihce-ekle');
    }

    public function tarihceDuzenle($id){
        $id = $id;
        return view('back.tarihce.tarihce-duzenle', compact('id'));
    }
    public function tarihceSil($id)
    {
        $tarihce = Tarihce::where('id', $id)->firstOrFail();
        $tarihce->save();
        $tarihce->delete();
        toastr()->success('Fotoğraf başarıyla silindi.', 'Başarılı');
        return redirect()->back();
    }
}
