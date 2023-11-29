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
        $urunler = Urunler::where('urunler_kategori_id', $kategoriFirstId)->get();

        return view('front.arcadia-baglari', compact('siteAyar','slug','raporlar','galeri','bloglar','kategori','urunler'));
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
        return view('front.basindan', compact('siteAyar'));
    }
    public function teruarsaraplari()
    {
        $siteAyar = $this->siteAyar;
        return view('front.teruar-saraplari', compact('siteAyar'));
    }
    public function hikayemiz($slug)
    {
        $siteAyar = $this->siteAyar;
        return view('front.hikayemiz', compact('siteAyar', 'slug'));
    }
    public function felsefemiz($slug)
    {
        $siteAyar = $this->siteAyar;
        $fauna = ArcadiaFauna::all();
        return view('front.felsefemiz', compact('siteAyar', 'slug', 'fauna'));
    }
    public function bakucha()
    {
        $siteAyar = $this->siteAyar;
        return view('front.bakuchavineyard', compact('siteAyar', ));
    }

}
