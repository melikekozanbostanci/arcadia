<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function siteAyarlar()
    {
        return view('back.site-ayarlari');
    }

    public function siteAyarlarGuncelle()
    {

    }
}
