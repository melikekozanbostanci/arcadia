<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Back\ArcadiaFauna;
use Illuminate\Http\Request;

class ArcadiaFaunaController extends Controller
{
    public function index()
    {
        $search = request()->get('search');
        $fauna = ArcadiaFauna::where('aciklama', 'like', "%$search%")
            ->orWhere('images_alt_aciklama', 'like', "%$search%")
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('back.arcadia-fauna.arcadia-fauna', compact('fauna'));
    }
    public function faunaEkle(){
        return view('back.arcadia-fauna.arcadia-fauna-ekle');
    }

    public function faunaDuzenle($id){
        $id = $id;
        return view('back.arcadia-fauna.arcadia-fauna-duzenle', compact('id'));
    }
    public function faunaSil($id)
    {
        $fauna = ArcadiaFauna::where('id', $id)->firstOrFail();
        $fauna->save();
        $fauna->delete();
        toastr()->success('Arcadia Fauna içerik başarıyla silindi.', 'Başarılı');
        return redirect()->back();
    }
}
