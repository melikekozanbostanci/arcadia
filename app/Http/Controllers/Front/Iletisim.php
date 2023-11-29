<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Front\Iletisim as ModelsIletisim;
use Illuminate\Http\Request;

class Iletisim extends Controller
{
    public function iletisimKaydet(Request $request)
    {
        // İletişim bilgilerini al
        $data = $request->validate([
            'ad_soyad' => 'required|string|max:255',
            'e_mail' => 'required|email|max:255',
            'mesaj' => 'required|string',
        ]);

        ModelsIletisim::create($data);

        return redirect()->back()->with('success', 'İletişim bilgileriniz başarıyla kaydedildi.');
    }

}
