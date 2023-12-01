<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Basindan extends Controller
{
    public function basindanSayfaAyarlari()
    {
        return view('back.basindan-sayfa-ayarlari');
    }
}
