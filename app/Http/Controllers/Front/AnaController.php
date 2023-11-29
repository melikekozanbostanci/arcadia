<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Front\Dil;
use App\Models\Front\Sayfa\Sayfa;
use App\Models\Front\SiteAyar;
use Illuminate\Http\Request;

class AnaController extends Controller
{
    protected $diller;
    protected $siteAyar;

    public function __construct()
    {
        /* session olarak dili kontrol edelim yoksa varsayılan değeri tr olsun */
        if (!session()->has('dil')) {
            session()->put('dil', 'tr');
        }
        // Dil ve SiteAyar modellerine erişimi dile göre
        $this->diller = Dil::find(1); // Örnek olarak dil verisini çekiyoruz, ID'yi uygun şekilde ayarlayın
        $this->siteAyar = SiteAyar::where("dil", session('dil'))->first(); // Örnek olarak site ayarlarını çekiyoruz, ID'yi uygun şekilde ayarlayın

    }

    public function index()
    {
        $diller = $this->diller;
        $siteAyar = $this->siteAyar;
        return view('front.index', compact('diller', 'siteAyar'));
    }

    public function iletisim()
    {
        return view('front.iletisim');
    }
    public function sayfaDetay($slug)
    {
        $diller = $this->diller;
        $siteAyar = $this->siteAyar;
        $sayfa = Sayfa::where('slug', $slug)->firstOrFail();
        return view('front.sayfa', compact('diller', 'siteAyar', 'sayfa'));
    }

}
