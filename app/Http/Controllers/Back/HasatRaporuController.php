<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Back\HasatRapor;

class HasatRaporuController extends Controller
{
    public function index()
    {
        $search = request()->get('search');
        $raporlar = HasatRapor::where('hasat_yil', 'like', "%$search%")
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('back.hasat-raporlari.hasat-raporlari', compact('raporlar'));
    }
    public function hasatRaporuEkle(){
        return view('back.hasat-raporlari.hasat-raporu-ekle');
    }

    public function hasatRaporuDuzenle($id){
        $id = $id;
        return view('back.hasat-raporlari.hasat-raporu-duzenle', compact('id'));
    }
    public function raporSil($id)
    {
        $rapor = HasatRapor::where('id', $id)->firstOrFail();
        $rapor->save();
        $rapor->delete();
        toastr()->success('Hasat Raporu başarıyla silindi.', 'Başarılı');
        return redirect()->back();
    }


}
