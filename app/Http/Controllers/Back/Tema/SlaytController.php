<?php

namespace App\Http\Controllers\Back\Tema;

use App\Http\Controllers\Controller;
use App\Models\Back\Dil;
use App\Models\Back\Tema\Slayt;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SlaytController extends Controller
{
    public function slaytlar()
    {
        $slaytlar = Slayt::paginate(10);
        return view('back.tema.slayt.slaytlar', compact('slaytlar'));
    }

    public function slaytEkle()
    {
        $diller = Dil::all();
        return view('back.tema.slayt.slayt-ekle', compact('diller'));
    }

    public function slaytKaydet(Request $request)
    {
        $request->validate([
            'dil' => 'required',
            'fotograf' => 'required|image|max:2048',

        ], [
            'dil.required' => 'Dil alanı boş bırakılamaz.',
            'fotograf.required' => 'Fotoğraf alanı boş bırakılamaz.',
            'fotograf.image' => 'Fotoğraf alanı resim dosyası olmalıdır.',
            'fotograf.mimes' => 'Fotoğraf alanı jpeg, png, jpg uzantılı olmalıdır.',
            'fotograf.max' => 'Fotoğraf alanı maksimum 2MB olmalıdır.',
        ]);
        /* Fotoğraf varlığını kontrol et ve varsa kaydet */
        if ($request->file('fotograf')) {
            $fotograf = $request->file('fotograf');
            $fotografAdi = time() . '.' . $fotograf->getClientOriginalExtension();
            $fotograf->storeAs('public/slaytlar', $fotografAdi);
            $request->fotograf = $fotografAdi;
        }

        $slayt = new Slayt();
        $slayt->uuid = (string)Str::uuid();
        $slayt->fotograf = $request->fotograf;
        $slayt->baslik = $request->baslik;
        $slayt->metin = $request->metin;
        $slayt->buton_metni = $request->buton_metni;
        $slayt->buton_linki = $request->buton_linki;
        $slayt->dil = $request->dil;
        $slayt->gosterim_basla = $request->gosterim_basla;
        $slayt->gosterim_bitis = $request->gosterim_bitis;
        $slayt->admin_id = auth()->guard('admin')->user()->id; // Authenticated admin id (admin_id
        $slayt->save();

        return redirect()->route('admin.slaytlar')->with('success', 'Slayt başarıyla eklendi.');

    }

    public function slaytDuzenle($uuid)
    {
        $slayt = Slayt::where('uuid', $uuid)->firstOrFail();
        $diller = Dil::all();
        return view('back.tema.slayt.slayt-duzenle', compact('diller', 'slayt'));
    }

    public function slaytGuncelle(Request $request, $uuid)
    {
        $request->validate([
            'dil' => 'required',
            'fotograf' => 'image|max:2048',

        ], [
            'dil.required' => 'Dil alanı boş bırakılamaz.',
            'fotograf.image' => 'Fotoğraf alanı resim dosyası olmalıdır.',
            'fotograf.mimes' => 'Fotoğraf alanı jpeg, png, jpg uzantılı olmalıdır.',
            'fotograf.max' => 'Fotoğraf alanı maksimum 2MB olmalıdır.',
        ]);
        /* Fotoğraf varlığını kontrol et ve varsa kaydet */
        if ($request->file('fotograf')) {
            $fotograf = $request->file('fotograf');
            $fotografAdi = time() . '.' . $fotograf->getClientOriginalExtension();
            $fotograf->storeAs('public/slaytlar', $fotografAdi);
            $request->fotograf = $fotografAdi;
        }else{
            $request->fotograf = $request->fotograf_eski;
        }

        $slayt = Slayt::where('uuid', $uuid)->firstOrFail();
        $slayt->fotograf = $request->fotograf;
        $slayt->baslik = $request->baslik;
        $slayt->metin = $request->metin;
        $slayt->buton_metni = $request->buton_metni;
        $slayt->buton_linki = $request->buton_linki;
        $slayt->dil = $request->dil;
        $slayt->gosterim_basla = $request->gosterim_basla;
        $slayt->gosterim_bitis = $request->gosterim_bitis;
        $slayt->updated_by = auth()->guard('admin')->user()->id; // Authenticated admin id (admin_id
        $slayt->save();

        return redirect()->route('admin.slaytlar')->with('success', 'Slayt başarıyla güncellendi.');
    }

    public function slaytSil($uuid)
    {
        $slayt = Slayt::where('uuid', $uuid)->firstOrFail();
        $slayt->delete();
        return redirect()->route('admin.slaytlar')->with('success', 'Slayt başarıyla silindi.');
    }

}
