<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Front\HasatRaporlari;
use App\Models\Front\FotoGaleri;
use App\Models\Front\Tarihce;
use App\Models\Front\ArcadiaFauna;
use App\Models\Front\Bloglar;
use App\Models\Front\Urun\Urunler;
use App\Models\Front\Urun\UrunKategorileri;
use App\Models\Front\Basindan;
use App\Models\Front\Hikayemiz;
use App\Models\Front\ArcadiaBaglari;
use App\Models\Front\Felsefemiz;
use App\Models\Front\Otel;
use App\Models\Front\Teruar;
use App\Models\Front\SiteAyarlari;
use Illuminate\Http\Request;

class SiteAyarlariController extends Controller
{
    protected $siteAyar;

    public function __construct()
    {
        $this->siteAyar = SiteAyarlari::first();
    }

    public function index()
    {
        $siteAyar = $this->siteAyar;
        $bloglar = Bloglar::latest()->take(3)->get();
        return view('front.homepage', compact('siteAyar', 'bloglar'));
    }

    public function iletisim()
    {
        $siteAyar = $this->siteAyar;
        return view('front.iletisim', compact('siteAyar'));
    }
    public function arcadiabaglari($slug)
    {
        $siteAyar = $this->siteAyar;
        $raporlar = HasatRaporlari::all();
        $galeri = FotoGaleri::all();
        $bloglar = Bloglar::all();
        $kategori = UrunKategorileri::all();
        $kategoriFirstId = UrunKategorileri::first()->id;
        $baglar = ArcadiaBaglari::first();
        $urunler = Urunler::where('urunler_kategori_id', $kategoriFirstId)->get();

        return view('front.arcadia-baglari', compact('siteAyar','slug','raporlar','galeri','bloglar','kategori','urunler','baglar'));
    }
    public function arcadiadanhaberler($slug)
    {
        $siteAyar = $this->siteAyar;
        $bloglar = Bloglar::latest()->take(3)->get();
        $blog = Bloglar::where('slug', $slug)->first();

        return view('front.blog', compact('siteAyar','slug','bloglar','blog'));
    }
    public function saraplarimiz($slug)
    {
        $siteAyar = $this->siteAyar;
        $raporlar = HasatRaporlari::all();
        $galeri = FotoGaleri::all();
        $bloglar = Bloglar::all();
        $kategori = UrunKategorileri::all();
        $baglar = ArcadiaBaglari::all();
        $urunler = Urunler::where('urunler_kategori_id', $slug)->get();
        return view('front.arcadia-baglari', compact('siteAyar','slug','urunler','raporlar','galeri','bloglar','kategori'));
    }
    public function tarihce()
    {
        $tarihce = Tarihce::orderByRaw('CAST(yil AS SIGNED) ASC')->get();
        $siteAyar = $this->siteAyar;
        return view('front.tarihce', compact('siteAyar','tarihce'));
    }

    public function basindan()
    {
        $siteAyar = $this->siteAyar;
        $basindan = Basindan::first();
        return view('front.basindan', compact('siteAyar', 'basindan'));
    }
    public function teruarsaraplari()
    {
        $siteAyar = $this->siteAyar;
        $teruar = Teruar::first();
        return view('front.teruar-saraplari', compact('siteAyar', 'teruar'));
    }
    public function hikayemiz($slug)
    {
        $siteAyar = $this->siteAyar;
        $hikayemiz = Hikayemiz::first();
        return view('front.hikayemiz', compact('siteAyar', 'slug', 'hikayemiz'));
    }
    public function felsefemiz($slug)
    {
        $siteAyar = $this->siteAyar;
        $fauna = ArcadiaFauna::all();
        $felsefemiz = Felsefemiz::first();
        return view('front.felsefemiz', compact('siteAyar', 'slug', 'fauna', 'felsefemiz'));
    }
    public function bakucha()
    {
        $siteAyar = $this->siteAyar;
        $otel = Otel::first();
        return view('front.bakuchavineyard', compact('siteAyar', 'otel'));
    }

}
