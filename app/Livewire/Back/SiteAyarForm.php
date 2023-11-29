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
        ], [
            'site_adi.required' => 'Site adı alanı zorunludur.',
            'site_baslik.required' => 'Site başlık alanı zorunludur.',
        ]);

        $siteAyar = SiteAyar::first();

        if ($siteAyar) {
            $siteAyar->delete();
        }
        $beyaz_logo = $this->site_beyaz_logo_temp;
        $siyah_logo = $this->site_siyah_logo_temp;
        $favicon = $this->site_favicon_temp;

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
        $site_ayarlari->save();

        $this->dispatch('success', ['title' => 'Başarılı', 'message' => 'Site ayarları güncellendi.']);
    }
}
