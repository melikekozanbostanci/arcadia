<?php

namespace App\Http\Controllers\Back\Tema;

use App\Http\Controllers\Controller;
use App\Models\Back\Dil;
use App\Models\Back\Tema\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MenuController extends Controller
{

    public function menuler()
    {
        $diller = Dil::all();
        $menuler = Menu::paginate(10);
        return view('back.tema.menuler', compact('diller', 'menuler'));
    }

    public function menuKaydet(Request $request)
    {
        $request->validate([
            'baslik' => 'required',
        ], [
            'baslik.required' => 'Başlık alanı zorunludur.',
        ]);

        $menu = new Menu();
        $menu->baslik = $request->baslik;
        $menu->slug = Str::slug($request->baslik);
        $menu->uuid = Str::uuid();
        $menu->admin_id = auth()->guard('admin')->user()->id;
        $menu->save();

        return redirect()->route('admin.menuler')->with('success', 'Menü başarıyla eklendi.');
    }

}
