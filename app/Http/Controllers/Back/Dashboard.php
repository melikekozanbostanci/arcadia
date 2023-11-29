<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;

class Dashboard extends Controller
{
    public function index()
    {
        return view('back.dashboard');
    }

    public function resimYukle()
    {
        /* TinyMCE'den gelen dosyayı yükle*/
        $file = request()->file('file');
        $fileName = time() . '.' . $file->extension();
        $file->move(public_path('uploads'), $fileName);
        return response()->json(['location' => '/uploads/' . $fileName]);
    }
}
