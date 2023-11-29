<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Back\UyelikBasvurusu;
use Illuminate\Http\Request;

class UyelikBasvurusuController extends Controller
{
    public function talepler()
    {
        $search = request()->get('search');

        $basvuru = UyelikBasvurusu::query()
            ->where(function ($query) use ($search) {
                $query->where('ad', 'like', "%$search%")
                    ->orWhere('soyad', 'like', "%$search%")
                    ->orWhere('tapdk_belge_no', 'like', "%$search%")
                    ->orWhere('eposta', 'like', "%$search%");
            })
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('back.uyelik-basvurulari.uyelik-basvurusu', compact('basvuru'));
    }

    public function basvuruDetay($id)
    {
        $detay = UyelikBasvurusu::find($id);
        return view('back.uyelik-basvurulari.uyelik-basvurulari-detay', compact('detay'));
    }
    public function basvuruSil($id)
    {
        UyelikBasvurusu::destroy($id);
        return redirect()->back()->with('success', 'Üyelik talebi başarıyla silindi.');
    }
}
