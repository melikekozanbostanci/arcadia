<?php

namespace App\Http\Controllers\Back\Urun;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Back\Urun\Urunler as UrunlerModel;

class Urunler extends Controller
{
    public function index()
    {
        $search = request()->get('search');
        $urunler = UrunlerModel::where('urun_adi', 'like', "%$search%")
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('back.urun.urunler', compact('urunler'));
    }
    public function urunEkle(){
        return view('back.urun.urunler-ekle');
    }
    public function urunDuzenle($id){
        $id = $id;
        return view('back.urun.urunler-duzenle', compact('id'));
    }
    public function urunSil($id)
    {
        $urun = UrunlerModel::where('id', $id)->firstOrFail();
        $urun->save();
        $urun->delete();
        toastr()->success('Ürün başarıyla silindi.', 'Başarılı');
        return redirect()->back();
    }
}
