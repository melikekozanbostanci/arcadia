<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Back\FotoGaleri;

class FotoGaleriController extends Controller
{
    public function index()
    {
        $search = request()->get('search');
        $galeri = FotoGaleri::where('baslik', 'like', "%$search%")
            ->orWhere('aciklama', 'like', "%$search%")
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('back.foto-galeri.foto-galeri', compact('galeri'));
    }
    public function fotoEkle(){
        return view('back.foto-galeri.foto-galeri-ekle');
    }

    public function fotoDuzenle($id){
        $id = $id;
        return view('back.foto-galeri.foto-galeri-duzenle', compact('id'));
    }
    public function fotoSil($id)
    {
        $foto = FotoGaleri::where('id', $id)->firstOrFail();
        $foto->save();
        $foto->delete();
        toastr()->success('Fotoğraf başarıyla silindi.', 'Başarılı');
        return redirect()->back();
    }
}
