<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArcadiaBaglariController extends Controller
{
    public function arcadiaBaglariSayfaAyarlari()
    {
        return view('back.arcadia-baglari-sayfa-ayarlari');
    }
}
