<?php

namespace App\Livewire\Back\Sayfa;

use App\Models\Back\Dil;
use App\Models\Back\Sayfa\Sayfa;
use App\Models\Back\Sayfa\SayfaKategori;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class SayfaEklemeForm extends Component
{

    use WithFileUploads;

    public $dil;
    public $baslik;
    public $slug;
    public $kisa_aciklama;
    public $icerik;
    public $meta_baslik;
    public $meta_aciklama;
    public $meta_anahtar_kelimeler;
    public $simge;
    public $fotograf;
    public $sira;
    public $aktif;
    public $kategori_id;


    public function render()
    {
        $sayfa_kategorileri = SayfaKategori::where('ust_id', 0)->get();
        $diller = Dil::all();
        return view('livewire.back.sayfa.sayfa-ekleme-form', compact('sayfa_kategorileri', 'diller'));
    }

    public function kaydet()
    {
        $this->validate([
            'dil' => 'required',
            'baslik' => 'required',
            'slug' => 'required|unique:sayfalar',
            'icerik' => 'required',
            'meta_baslik' => 'max:50',
            'meta_aciklama' => 'max:160',
            'meta_anahtar_kelimeler' => 'max:255',
            'sira' => 'integer',
            'aktif' => 'required|in:1,0',
            'kategori_id' => 'required',
        ], [
            'dil.required' => 'Dil alanı zorunludur.',
            'baslik.required' => 'Başlık alanı zorunludur.',
            'slug.required' => 'Slug alanı zorunludur.',
            'slug.unique' => 'Slug alanı benzersiz olmalıdır.',
            'icerik.required' => 'İçerik alanı zorunludur.',
            'meta_baslik.max' => 'Meta başlık alanı en fazla 50 karakter olmalıdır.',
            'meta_aciklama.max' => 'Meta açıklama alanı en fazla 160 karakter olmalıdır.',
            'meta_anahtar_kelimeler.max' => 'Meta anahtar kelimeler alanı en fazla 255 karakter olmalıdır.',
            'sira.integer' => 'Sıra alanı sayı olmalıdır.',
            'aktif.required' => 'Aktif alanı zorunludur.',
            'aktif.in' => 'Aktif alanı geçerli bir değer olmalıdır.',
            'kategori_id.required' => 'Kategori alanı zorunludur.',
        ]);

        if ($this->simge) {
            $this->validate([
                'simge' => 'image',
            ], [
                'simge.image' => 'Fotoğraf alanı resim dosyası olmalıdır.',
            ]);

            $simge_name = md5($this->simge . microtime()) . '.' . $this->simge->extension();
            $this->simge->storeAs('public/sayfalar', $simge_name);
        } else {
            $simge_name = null;
        }

        if ($this->fotograf) {
            $this->validate([
                'fotograf' => 'image',
            ], [
                'fotograf.image' => 'Fotoğraf alanı resim dosyası olmalıdır.',
            ]);

            $fotograf_name = md5($this->fotograf . microtime()) . '.' . $this->fotograf->extension();
            $this->fotograf->storeAs('public/sayfalar', $fotograf_name);
        } else {
            $fotograf_name = null;
        }

        $sayfa = new Sayfa();
        $sayfa->dil = $this->dil;
        $sayfa->uuid = (string)Str::uuid();
        $sayfa->baslik = $this->baslik;
        $sayfa->slug = $this->slug;
        $sayfa->kisa_aciklama = $this->kisa_aciklama;
        $sayfa->icerik = $this->icerik;
        $sayfa->meta_baslik = $this->meta_baslik;
        $sayfa->meta_aciklama = $this->meta_aciklama;
        $sayfa->meta_anahtar_kelimeler = $this->meta_anahtar_kelimeler;
        $sayfa->simge = $simge_name;
        $sayfa->fotograf = $fotograf_name;
        $sayfa->sira = $this->sira;
        $sayfa->aktif = $this->aktif;
        $sayfa->kategori_id = $this->kategori_id;
        $sayfa->admin_id = auth()->guard('admin')->user()->id;
        $sayfa->save();

        $this->dispatch('success', ['title' => 'Başarılı', 'message' => 'Sayfa başarıyla eklendi.']);
        return $this->redirect(route("admin.sayfalar"), navigate: true);

    }

    public function slugUret()
    {
        $this->slug = Str::slug($this->baslik);
    }
}
