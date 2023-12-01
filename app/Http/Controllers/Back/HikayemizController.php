<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HikayemizController extends Controller
{
    public function hikayemizSayfaAyarlari()
    {
        return view('back.hikayemiz-sayfa-ayarlari');
    }
}
