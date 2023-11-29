<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Front\UyelikBasvurusu;
use Illuminate\Support\Facades\DB;

class UyelikBasvurusuController extends Controller
{
    public function uyelikBasvurusuKaydet(Request $request)
    {
        // Başvuru bilgileri
        $data = $request->validate([
            'faaliyet_alani' => 'required|string',
            'ticari_unvan' => 'required|string',
            'tapdk_belge_no' => 'required|string',
            'ad' => 'required|string',
            'soyad' => 'required|string',
            'dogum_tarihi' => 'required|string',
            'telefon' => 'required|string',
            'eposta' => 'required|email|max:255',
            'adres' => 'required|string',
            'il' => 'required|string',
            'ilce' => 'required|string',
            'ekler' => 'nullable|string',

        ]);

        UyelikBasvurusu::create($data);
        session()->flash('status', 'Üyelik başvurunuz alındı. İncelemelerden sonra size e-postanız aracılığı ile iletişime geçilecektir.');
        return redirect()->back();
    }
    public function giris(Request $request)
    {
        $request->validate([
            'eposta' => 'required|email',
            'sifre' => 'required',
        ]);

        $eposta = $request->input('eposta');
        $sifre = $request->input('sifre');
        $kullanici = DB::table('uyelik_basvurusu')
            ->where('eposta', $eposta)
            ->where('sifre', $sifre)
            ->first();

        if ($kullanici) {
            session(['user' => $kullanici->eposta]);
            return redirect()->route('/')->with('success', 'Başarıyla giriş yapıldı.Şaraplarımızı inceleyebilirsiniz');
        }

        return redirect()->route('/')->with('error', 'E-posta veya şifre hatalı.');
    }
}
