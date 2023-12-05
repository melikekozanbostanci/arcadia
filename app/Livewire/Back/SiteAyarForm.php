<?php

namespace App\Livewire\Back;

use App\Models\Back\Dil;
use App\Models\Back\SiteAyar;
use Livewire\Component;
use Livewire\WithFileUploads;

class SiteAyarForm extends Component
{
    use WithFileUploads;

    public $site_adi;
    public $site_baslik;
    public $site_aciklama;
    public $site_anahtar_kelimeler;
    public $site_beyaz_logo;
    public $site_beyaz_logo_temp;
    public $site_siyah_logo;
    public $site_siyah_logo_temp;
    public $site_favicon;
    public $site_favicon_temp;
    public $site_telefon;
    public $site_eposta;
    public $site_adres;
    public $site_facebook;
    public $site_twitter;
    public $site_instagram;
    public $site_youtube;
    public $site_google_harita;
    public $site_google_analytics;

    public $fotograf_ana;
    public $fotograf_ana_temp;
    public $fotograf_ana_baslik;
    public $baslik_1;
    public $alt_baslik_1;
    public $aciklama_1;
    public $fotograf_1;
    public $fotograf_1_temp;
    public $fotograf_yazi_1;
    public $fotograf_yazi_2;
    public $baslik_2;
    public $alt_baslik_2;
    public $aciklama_2_1;
    public $aciklama_2_2;
    public $fotograf_2;
    public $fotograf_2_temp;
    public $fotograf_3;
    public $baslik_3;
    public $alt_baslik_3;
    public $aciklama_3;
    public $fotograf_4;
    public $fotograf_4_temp;
    public $fotograf_5;
    public $fotograf_5_temp;
    public $fotograf_6;
    public $fotograf_6_temp;
    public $fotograf_7;
    public $fotograf_7_temp;
    public $fotograf_8;
    public $fotograf_8_temp;


    public function mount()
    {
        $site_ayarlari = SiteAyar::first();
        if ($site_ayarlari) {
            $this->site_adi = $site_ayarlari->site_adi;
            $this->site_baslik = $site_ayarlari->site_baslik;
            $this->site_aciklama = $site_ayarlari->site_aciklama;
            $this->site_anahtar_kelimeler = $site_ayarlari->site_anahtar_kelimeler;
            $this->site_beyaz_logo_temp = $site_ayarlari->site_beyaz_logo;
            $this->site_siyah_logo_temp = $site_ayarlari->site_siyah_logo;
            $this->site_favicon_temp = $site_ayarlari->site_favicon;

            $this->site_telefon = $site_ayarlari->site_telefon;
            $this->site_eposta = $site_ayarlari->site_eposta;
            $this->site_adres = $site_ayarlari->site_adres;
            $this->site_facebook = $site_ayarlari->site_facebook;
            $this->site_twitter = $site_ayarlari->site_twitter;
            $this->site_instagram = $site_ayarlari->site_instagram;
            $this->site_youtube = $site_ayarlari->site_youtube;
            $this->site_google_harita = $site_ayarlari->site_google_harita;
            $this->site_google_analytics = $site_ayarlari->site_google_analytics;
            $this->fotograf_ana_temp = $site_ayarlari->fotograf_ana;
            $this->fotograf_ana_baslik = $site_ayarlari->fotograf_ana_baslik;
            $this->baslik_1 = $site_ayarlari->baslik_1;
            $this->alt_baslik_1 = $site_ayarlari->alt_baslik_1;
            $this->aciklama_1 = $site_ayarlari->aciklama_1;

            $this->fotograf_yazi_1 = $site_ayarlari->fotograf_yazi_1;
            $this->fotograf_yazi_2 = $site_ayarlari->fotograf_yazi_2;
            $this->baslik_2 = $site_ayarlari->baslik_2;
            $this->alt_baslik_2 = $site_ayarlari->alt_baslik_2;
            $this->aciklama_2_1 = $site_ayarlari->aciklama_2_1;
            $this->aciklama_2_2 = $site_ayarlari->aciklama_2_2;
            $this->baslik_3 = $site_ayarlari->baslik_3;
            $this->alt_baslik_3 = $site_ayarlari->alt_baslik_3;
            $this->aciklama_3 = $site_ayarlari->aciklama_3;
        }

    }

    public function render()
    {
        $diller = Dil::all();
        return view('livewire.back.site-ayar-form', compact('diller'));
    }

    public function kaydet()
    {
        $this->validate([
            'site_adi' => 'required',
            'site_baslik' => 'required',
            'fotograf_ana_baslik' => 'required',
            'baslik_1' => 'required',
            'alt_baslik_1' => 'required',
            'aciklama_1' => 'required',
            'fotograf_yazi_1' => 'required',
            'fotograf_yazi_2' => 'required',
            'baslik_2' => 'required',
            'alt_baslik_2' => 'required',
            'aciklama_2_1' => 'required',
            'aciklama_2_2' => 'required',
            'baslik_3' => 'required',
            'alt_baslik_3' => 'required',
            'aciklama_3' => 'required',
            'fotograf_3' => 'required',
        ], [
            'site_adi.required' => 'Site adı alanı zorunludur.',
            'site_baslik.required' => 'Site başlık alanı zorunludur.',
            'fotograf_ana_baslik.required' => 'Bu alan zorunludur.',
            'baslik_1.required' => 'Bu alan zorunludur.',
            'alt_baslik_1.required' => 'Bu alan zorunludur.',
            'aciklama_1.required' => 'Bu alan zorunludur.',
            'fotograf_yazi_1.required' => 'Bu alan zorunludur.',
            'fotograf_yazi_2.required' => 'Bu alan zorunludur.',
            'baslik_2.required' => 'Bu alan zorunludur.',
            'alt_baslik_2.required' => 'Bu alan zorunludur.',
            'aciklama_2_1.required' => 'Bu alan zorunludur.',
            'aciklama_2_2.required' => 'Bu alan zorunludur.',
            'baslik_3.required' => 'Bu alan zorunludur.',
            'alt_baslik_3.required' => 'Bu alan zorunludur.',
            'aciklama_3.required' => 'Bu alan zorunludur.',
            'fotograf_3.required' => 'Bu alan zorunludur.',
        ]);

        $siteAyar = SiteAyar::first();

        if ($siteAyar) {
            $siteAyar->delete();
        }
        $beyaz_logo = $this->site_beyaz_logo_temp;
        $siyah_logo = $this->site_siyah_logo_temp;
        $favicon = $this->site_favicon_temp;

        $fotograf_ana=$this->fotograf_ana_temp;
        $fotograf_1=$this->fotograf_1_temp;
        $fotograf_2=$this->fotograf_2_temp;
        $fotograf_4=$this->fotograf_4_temp;
        $fotograf_5=$this->fotograf_5_temp;
        $fotograf_6=$this->fotograf_6_temp;
        $fotograf_7=$this->fotograf_7_temp;
        $fotograf_8=$this->fotograf_8_temp;

        if ($this->site_beyaz_logo) {
            $this->validate([
                'site_beyaz_logo' => 'image|max:1024',
            ], [
                'site_beyaz_logo.image' => 'Site beyaz logo alanı resim dosyası olmalıdır.',
                'site_beyaz_logo.max' => 'Site beyaz logo alanı en fazla 1MB olmalıdır.',
            ]);

            $beyaz_logo = md5($this->site_beyaz_logo . microtime()) . '.' . $this->site_beyaz_logo->extension();
            $this->site_beyaz_logo->storeAs('public/site-ayar', $beyaz_logo);
        }

        if ($this->site_siyah_logo) {
            $this->validate([
                'site_siyah_logo' => 'image|max:1024',
            ], [
                'site_siyah_logo.image' => 'Site siyah logo alanı resim dosyası olmalıdır.',
                'site_siyah_logo.max' => 'Site siyah logo alanı en fazla 1MB olmalıdır.',
            ]);

            $siyah_logo = md5($this->site_siyah_logo . microtime()) . '.' . $this->site_siyah_logo->extension();
            $this->site_siyah_logo->storeAs('public/site-ayar', $siyah_logo);
        }

        if ($this->site_favicon) {
            $this->validate([
                'site_favicon' => 'image|max:1024',
            ], [
                'site_favicon.image' => 'Site favicon alanı resim dosyası olmalıdır.',
                'site_favicon.max' => 'Site favicon alanı en fazla 1MB olmalıdır.',
            ]);

            $favicon = md5($this->site_favicon . microtime()) . '.' . $this->site_favicon->extension();
            $this->site_favicon->storeAs('public/site-ayar', $favicon);
        }

        if ($this->fotograf_ana) {
            $this->validate([
                'fotograf_ana' => 'image|max:2048',
            ], [
                'fotograf_ana.image' => 'Ana fotoğraf alanı resim dosyası olmalıdır.',
                'fotograf_ana.max' => 'Ana fotoğraf alanı en fazla 2MB olmalıdır.',
            ]);

            $fotograf_ana = md5($this->fotograf_ana . microtime()) . '.' . $this->fotograf_ana->extension();
            $this->fotograf_ana->storeAs('public/site-ayar', $fotograf_ana);
        }

        if ($this->fotograf_1) {
            $this->validate([
                'fotograf_1' => 'image|max:2048',
            ], [
                'fotograf_1.image' => 'Fotoğraf 1 alanı resim dosyası olmalıdır.',
                'fotograf_1.max' => 'Fotoğraf 1 alanı en fazla 2MB olmalıdır.',
            ]);

            $fotograf_1 = md5($this->fotograf_1 . microtime()) . '.' . $this->fotograf_1->extension();
            $this->fotograf_1->storeAs('public/site-ayar', $fotograf_1);
        }

        if ($this->fotograf_2) {
            $this->validate([
                'fotograf_2' => 'image|max:2048',
            ], [
                'fotograf_2.image' => 'Fotoğraf 2 alanı resim dosyası olmalıdır.',
                'fotograf_2.max' => 'Fotoğraf 2 alanı en fazla 2MB olmalıdır.',
            ]);

            $fotograf_2 = md5($this->fotograf_2 . microtime()) . '.' . $this->fotograf_2->extension();
            $this->fotograf_2->storeAs('public/site-ayar', $fotograf_2);
        }


        if ($this->fotograf_4) {
            $this->validate([
                'fotograf_4' => 'image|max:2048',
            ], [
                'fotograf_4.image' => 'Fotoğraf 4 alanı resim dosyası olmalıdır.',
                'fotograf_4.max' => 'Fotoğraf 4 alanı en fazla 2MB olmalıdır.',
            ]);

            $fotograf_4 = md5($this->fotograf_4 . microtime()) . '.' . $this->fotograf_4->extension();
            $this->fotograf_4->storeAs('public/site-ayar', $fotograf_4);
        }

        if ($this->fotograf_5) {
            $this->validate([
                'fotograf_5' => 'image|max:2048',
            ], [
                'fotograf_5.image' => 'Fotoğraf 5 alanı resim dosyası olmalıdır.',
                'fotograf_5.max' => 'Fotoğraf 5 alanı en fazla 2MB olmalıdır.',
            ]);

            $fotograf_5 = md5($this->fotograf_5 . microtime()) . '.' . $this->fotograf_5->extension();
            $this->fotograf_5->storeAs('public/site-ayar', $fotograf_5);
        }

        if ($this->fotograf_6) {
            $this->validate([
                'fotograf_6' => 'image|max:2048',
            ], [
                'fotograf_6.image' => 'Fotoğraf 6 alanı resim dosyası olmalıdır.',
                'fotograf_6.max' => 'Fotoğraf 6 alanı en fazla 2MB olmalıdır.',
            ]);

            $fotograf_6 = md5($this->fotograf_6 . microtime()) . '.' . $this->fotograf_6->extension();
            $this->fotograf_6->storeAs('public/site-ayar', $fotograf_6);
        }

        if ($this->fotograf_7) {
            $this->validate([
                'fotograf_7' => 'image|max:2048',
            ], [
                'fotograf_7.image' => 'Fotoğraf 7 alanı resim dosyası olmalıdır.',
                'fotograf_7.max' => 'Fotoğraf 7 alanı en fazla 2MB olmalıdır.',
            ]);

            $fotograf_7 = md5($this->fotograf_7 . microtime()) . '.' . $this->fotograf_7->extension();
            $this->fotograf_7->storeAs('public/site-ayar', $fotograf_7);
        }

        if ($this->fotograf_8) {
            $this->validate([
                'fotograf_8' => 'image|max:2048',
            ], [
                'fotograf_8.image' => 'Fotoğraf 8 alanı resim dosyası olmalıdır.',
                'fotograf_8.max' => 'Fotoğraf 8 alanı en fazla 2MB olmalıdır.',
            ]);

            $fotograf_8 = md5($this->fotograf_8 . microtime()) . '.' . $this->fotograf_8->extension();
            $this->fotograf_8->storeAs('public/site-ayar', $fotograf_8);
        }


        $site_ayarlari = new SiteAyar();
        $site_ayarlari->site_adi = $this->site_adi;
        $site_ayarlari->site_baslik = $this->site_baslik;
        $site_ayarlari->site_aciklama = $this->site_aciklama;
        $site_ayarlari->site_anahtar_kelimeler = $this->site_anahtar_kelimeler;
        $site_ayarlari->site_beyaz_logo = $beyaz_logo;
        $site_ayarlari->site_siyah_logo = $siyah_logo;
        $site_ayarlari->site_favicon = $favicon;
        $site_ayarlari->site_telefon = $this->site_telefon;
        $site_ayarlari->site_eposta = $this->site_eposta;
        $site_ayarlari->site_adres = $this->site_adres;
        $site_ayarlari->site_facebook = $this->site_facebook;
        $site_ayarlari->site_twitter = $this->site_twitter;
        $site_ayarlari->site_instagram = $this->site_instagram;
        $site_ayarlari->site_youtube = $this->site_youtube;
        $site_ayarlari->site_google_harita = $this->site_google_harita;
        $site_ayarlari->site_google_analytics = $this->site_google_analytics;

        $site_ayarlari->fotograf_ana = $fotograf_ana;
        $site_ayarlari->fotograf_ana_baslik = $this->fotograf_ana_baslik;
        $site_ayarlari->baslik_1 = $this->baslik_1;
        $site_ayarlari->alt_baslik_1 = $this->alt_baslik_1;
        $site_ayarlari->aciklama_1 = nl2br($this->aciklama_1);
        $site_ayarlari->fotograf_1 = $fotograf_1;
        $site_ayarlari->fotograf_yazi_1 = nl2br($this->fotograf_yazi_1);
        $site_ayarlari->fotograf_yazi_2 = nl2br($this->fotograf_yazi_2);
        $site_ayarlari->baslik_2 = $this->baslik_2;
        $site_ayarlari->alt_baslik_2 = $this->alt_baslik_2;
        $site_ayarlari->aciklama_2_1 = nl2br($this->aciklama_2_1);
        $site_ayarlari->aciklama_2_2 = nl2br($this->aciklama_2_2);
        $site_ayarlari->fotograf_2 = $fotograf_2;
        $site_ayarlari->fotograf_3 = $this->fotograf_3;
        $site_ayarlari->baslik_3 = $this->baslik_3;
        $site_ayarlari->alt_baslik_3 = $this->alt_baslik_3;
        $site_ayarlari->aciklama_3 = nl2br($this->aciklama_3);
        $site_ayarlari->fotograf_4 = $fotograf_4;
        $site_ayarlari->fotograf_5 = $fotograf_5;
        $site_ayarlari->fotograf_6 = $fotograf_6;
        $site_ayarlari->fotograf_7 = $fotograf_7;
        $site_ayarlari->fotograf_8 = $fotograf_8;

        $site_ayarlari->save();

        $this->dispatch('success', ['title' => 'Başarılı', 'message' => 'Site ayarları güncellendi.']);
    }
}
