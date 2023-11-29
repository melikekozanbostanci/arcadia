<?php

namespace App\Http\Controllers\Back\Kullanici;

use App\Http\Controllers\Controller;
use App\Models\Back\Admin;

class KullaniciController extends Controller
{

    public function kullanicilar()
    {
        $search = request()->get('search');
        $kullanicilar = Admin::where('name', 'like', "%$search%")->paginate(10);
        return view('back.kullanici.kullanicilar', compact('kullanicilar'));
    }

    public function kullaniciEkle()
    {
        return view('back.kullanici.kullanici-ekle');
    }


    public function kullaniciDuzenle($id)
    {
        $kullanici = Admin::find($id);
        return view('back.kullanici.kullanici-duzenle', compact('kullanici'));
    }

    public function kullaniciSil($id)
    {
        $kullanici = Admin::find($id);
        $kullanici->delete();
        return redirect()->route('admin.kullanicilar')->with('success', 'Kullanıcı başarıyla silindi.');
    }

}
