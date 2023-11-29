<?php

namespace App\Http\Controllers\Back\Urun;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Back\Urun\UrunKategorileri as UrunKategorileriModel;

class UrunKategorileri extends Controller
{
    public function index()
    {
        $search = request()->get('search');
        $kategori = UrunKategorileriModel::where('kategori_adi', 'like', "%$search%")
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('back.urun.kategori.urun-kategori', compact('kategori'));
    }
    public function urunKategoriEkle(){
        return view('back.urun.kategori.urun-kategori-ekle');
    }
    public function urunKategoriDuzenle($id){
        $id = $id;
        return view('back.urun.kategori.urun-kategori-duzenle', compact('id'));
    }
    public function urunKategoriSil($id)
    {
        $urun = UrunKategorileri::where('id', $id)->firstOrFail();
        $urun->save();
        $urun->delete();
        toastr()->success('Ürün Kategorisi başarıyla silindi.', 'Başarılı');
        return redirect()->back();
    }
}
