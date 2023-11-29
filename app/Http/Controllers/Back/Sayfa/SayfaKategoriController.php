<?php

namespace App\Http\Controllers\Back\Sayfa;

use App\Http\Controllers\Controller;
use App\Models\Back\Dil;
use App\Models\Back\Sayfa\SayfaKategori;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SayfaKategoriController extends Controller
{
    public function sayfaKategorileri()
    {
        $search = request()->get('search');
        if ($search) {
            $sayfaKategorileri = SayfaKategori::where('aktif', 1)->where('kategori_adi', 'like', "%$search%")->orderBy('id', 'asc')->paginate(10);
        } else {
            $sayfaKategorileri = SayfaKategori::where('aktif', 1)->orderBy('ust_id', 'asc')->with('altKategorileri')->paginate(10);
        }
        $selectKategoriler = SayfaKategori::where('aktif', 1)->where("ust_id", 0)->orderBy('id', 'asc')->get();
        $diller = Dil::where('aktif', 1)->orderBy('id', 'desc')->get();
        return view('back.sayfa.kategori.kategoriler', compact('sayfaKategorileri', 'selectKategoriler', 'diller'));
    }

    public function sayfaKategoriKaydet(Request $request)
    {
        $this->validate($request, [
            'kategori_adi' => 'required|min:3|max:255',
            'dil' => 'required',
            'ust_id' => 'required',
        ], [
            'kategori_adi.required' => 'Kategori adı alanı zorunludur.',
            'kategori_adi.min' => 'Kategori adı alanı en az 3 karakterden oluşmalıdır.',
            'kategori_adi.max' => 'Kategori adı alanı en fazla 255 karakterden oluşmalıdır.',
            'dil.required' => 'Dil alanı zorunludur.',
            'ust_id.required' => 'Üst kategori alanı zorunludur.',
        ]);

        $sayfaKat = new SayfaKategori();
        $sayfaKat->uuid = (string)Str::uuid();
        $sayfaKat->kategori_adi = $request->kategori_adi;
        $sayfaKat->slug = Str::slug($request->kategori_adi);
        $sayfaKat->dil = $request->dil;
        $sayfaKat->ust_id = $request->ust_id;
        $sayfaKat->admin_id = auth()->guard('admin')->user()->id;
        $sayfaKat->save();

        toastr()->success('Sayfa kategorisi başarıyla kaydedildi.', 'İşlem Başarılı');
        return redirect()->route('admin.sayfa-kategorileri');
    }

    public function sayfaKategoriGuncelle(Request $request, $uuid)
    {
        $this->validate($request, [
            'kategori_adi' => 'required|min:3|max:255',
            'dil' => 'required',
            'ust_id' => 'required',
        ], [
            'kategori_adi.required' => 'Kategori adı alanı zorunludur.',
            'kategori_adi.min' => 'Kategori adı alanı en az 3 karakterden oluşmalıdır.',
            'kategori_adi.max' => 'Kategori adı alanı en fazla 255 karakterden oluşmalıdır.',
            'dil.required' => 'Dil alanı zorunludur.',
            'ust_id.required' => 'Üst kategori alanı zorunludur.',
        ]);

        $sayfaKat = SayfaKategori::where('uuid', $uuid)->firstOrFail();
        $sayfaKat->kategori_adi = $request->kategori_adi;
        $sayfaKat->slug = Str::slug($request->kategori_adi);
        $sayfaKat->dil = $request->dil;
        $sayfaKat->ust_id = $request->ust_id;
        $sayfaKat->admin_id = auth()->guard('admin')->user()->id;
        $sayfaKat->save();

        toastr()->success('Sayfa kategorisi başarıyla güncellendi.', 'İşlem Başarılı');
        return redirect()->route('admin.sayfa-kategorileri');
    }

    public function sayfaKategoriSil(Request $request)
    {
        $dil = SayfaKategori::where('uuid', $request->uuid)->firstOrFail();
        $dil->deleted_by = auth()->guard('admin')->user()->id;  // Soft delete için silen kişinin id'si
        $dil->save();
        $dil->delete();
        toastr()->success('Dil başarıyla silindi.', 'Başarılı');
        return redirect()->back();
    }

    public function sayfaKategoriTopluSil(Request $request)
    {
        $secilenKategoriler = explode(",", $request->secilenKategoriler);

        $this->validate($request, [
            'secilenKategoriler' => 'required',
        ], [
            'secilenKategoriler.required' => 'En az bir kategori seçimi yapmalısınız.',
        ]);


        $sayfaKategorileri = SayfaKategori::whereIn('uuid', $secilenKategoriler)->get();
        foreach ($sayfaKategorileri as $sayfaKategori) {
            $sayfaKategori->deleted_by = auth()->guard('admin')->user()->id;  // Soft delete için silen kişinin id'si
            $sayfaKategori->save();
            $sayfaKategori->delete();
        }
        toastr()->success('Sayfa kategorileri başarıyla silindi.', 'İşlem Başarılı');
        return redirect()->back();
    }

    public function sayfaKategoriDuzenle($uuid)
    {
        $sayfaKategori = SayfaKategori::where('uuid', $uuid)->firstOrFail();
        $selectKategoriler = SayfaKategori::where('aktif', 1)->where("ust_id", 0)->orderBy('id', 'asc')->get();
        $diller = Dil::where('aktif', 1)->orderBy('id', 'desc')->get();
        return view('back.sayfa.kategori.kategori-duzenle', compact('sayfaKategori', 'selectKategoriler', 'diller'));
    }

}
