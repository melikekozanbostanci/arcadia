<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Felsefemiz extends Controller
{
    public function felsefemizSayfaAyarlari()
    {
        return view('back.felsefemiz-sayfa-ayarlari');
    }
}
