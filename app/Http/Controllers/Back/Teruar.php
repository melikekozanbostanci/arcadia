<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Teruar extends Controller
{
    public function teruarSayfaAyarlari()
    {
        return view('back.teruar-sayfa-ayarlari');
    }
}
