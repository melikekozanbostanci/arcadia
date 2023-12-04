<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Otel extends Controller
{
    public function otelSayfaAyarlari()
    {
        return view('back.otel-sayfa-ayarlari');
    }

}
