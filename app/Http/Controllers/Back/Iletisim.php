<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Back\Iletisim as ModelsIletisim;
use Illuminate\Http\Request;

class Iletisim extends Controller
{
    public function talepler()
    {
        $search = request()->get('search');
        $iletisim = ModelsIletisim::where('ad_soyad', 'like', "%$search%")
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('back.iletisim', compact('iletisim'));
    }

    public function mesajSil($id)
    {
        ModelsIletisim::destroy($id);
        return redirect()->back()->with('success', 'İletişim talebi başarıyla silindi.');
    }


}
