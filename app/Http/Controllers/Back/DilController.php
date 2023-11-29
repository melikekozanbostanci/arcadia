<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Back\Dil;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DilController extends Controller
{
    public function dilYonetimi()
    {
        $diller = Dil::all();
        return view('back.dil-yonetimi', compact('diller'));
    }

    public function dilKaydet(Request $request)
    {
        $request->validate([
            'dil' => 'required',
            'kod' => 'required',
            'yazi' => 'required',
            'aktif' => 'required',
        ], [
            'dil.required' => 'Dil alanı boş bırakılamaz.',
            'kod.required' => 'Kod alanı boş bırakılamaz.',
            'yazi.required' => 'Yazı alanı boş bırakılamaz.',
            'aktif.required' => 'Aktif alanı boş bırakılamaz.',
        ]);

        if ($request->bayrak) {
            $request->validate([
                'bayrak' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ], [
                'bayrak.image' => 'Bayrak alanı resim dosyası olmalıdır.',
                'bayrak.mimes' => 'Bayrak alanı jpeg,png,jpg,gif,svg uzantılı resim dosyası olmalıdır.',
                'bayrak.max' => 'Bayrak alanı maksimum 2MB olmalıdır.',
            ]);

            $file = $request->file('bayrak');
            $fileName = time() . '.' . $file->extension();
            $file->storeAs('/public/bayraklar', $fileName);
            $request->bayrak = $fileName;
        }

        $dil = new Dil();
        $dil->uuid = (string)Str::uuid();
        $dil->dil = $request->dil;
        $dil->kod = $request->kod;
        $dil->yazi = $request->yazi;
        $dil->aktif = $request->aktif;
        $dil->bayrak = $request->bayrak;
        $dil->admin_id = auth()->guard('admin')->user()->id;
        $dil->save();

        toastr()->success('Dil başarıyla eklendi.', 'Başarılı');
        return redirect()->back();
    }

    public function dilGuncelle(Request $request)
    {
        $request->validate([
            'dil' => 'required',
            'kod' => 'required',
            'yazi' => 'required',
            'aktif' => 'required',
        ], [
            'dil.required' => 'Dil alanı boş bırakılamaz.',
            'kod.required' => 'Kod alanı boş bırakılamaz.',
            'yazi.required' => 'Yazı alanı boş bırakılamaz.',
            'aktif.required' => 'Aktif alanı boş bırakılamaz.',
        ]);
        $dil = Dil::where('uuid', $request->uuid)->firstOrFail();

        if ($request->bayrak) {
            $request->validate([
                'bayrak' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ], [
                'bayrak.image' => 'Bayrak alanı resim dosyası olmalıdır.',
                'bayrak.mimes' => 'Bayrak alanı jpeg,png,jpg,gif,svg uzantılı resim dosyası olmalıdır.',
                'bayrak.max' => 'Bayrak alanı maksimum 2MB olmalıdır.',
            ]);

            /* Eski bayrağı silip yenisini ekleyelim */
            if ($dil->bayrak) {
                $file = $dil->bayrak;
                $file = str_replace('storage', 'public', $file);
                \Storage::delete($file);
            }

            $file = $request->file('bayrak');
            $fileName = time() . '.' . $file->extension();
            $file->storeAs('/public/bayraklar', $fileName);
            $request->bayrak = $fileName;
        }

        $dil->dil = $request->dil;
        $dil->kod = $request->kod;
        $dil->yazi = $request->yazi;
        $dil->aktif = $request->aktif;
        $dil->bayrak = $request->bayrak;
        $dil->save();

        toastr()->success('Dil başarıyla eklendi.', 'Başarılı');
        return redirect()->back();
    }

    public function dilSil($uuid)
    {
        $dil = Dil::where('uuid', $uuid)->firstOrFail();
        $dil->deleted_by = auth()->guard('admin')->user()->id;  // Soft delete için silen kişinin id'si
        $dil->save();
        $dil->delete();
        toastr()->success('Dil başarıyla silindi.', 'Başarılı');
        return redirect()->back();
    }

}
