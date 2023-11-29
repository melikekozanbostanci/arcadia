<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Login extends Controller
{
    public function logout()
    {
        auth()->guard('admin')->logout();
        return redirect()->route('back.login');
    }
}
