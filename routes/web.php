<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\SiteAyarlariController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Front */
Route::get('/', 'App\Http\Controllers\Front\AnaController@index')->name('anasayfa');
Route::get('sayfa/{slug}', 'App\Http\Controllers\Front\AnaController@sayfaDetay')->name('sayfa');
/* Front */



/* Admin */
Route::middleware("isadmin")->get('/admin', function () {
    return view('back.login');
})->name("back.login");

Route::prefix("admin")->middleware("isnotadmin")->group(function () {
    Route::get('/cikis', 'App\Http\Controllers\Back\Login@logout')->name('back.logout');
    Route::get('/dashboard', 'App\Http\Controllers\Back\Dashboard@index')->name('admin.dashboard');

    /*İLETİŞİM*/
    Route::get('/iletisim', 'App\Http\Controllers\Back\Iletisim@talepler')->name('admin.iletisim');
    Route::delete('/mesaj-sil/{id}', 'App\Http\Controllers\Back\Iletisim@mesajSil')->name('admin.mesaj-sil');
    /*İLETİŞİM*/

    /*HASAT RAPORLARI*/
    Route::get('/hasat-raporlari', 'App\Http\Controllers\Back\HasatRaporuController@index')->name('admin.hasat-raporlari');
    Route::get('/hasat-raporu-ekle', 'App\Http\Controllers\Back\HasatRaporuController@hasatRaporuEkle')->name('admin.hasat-raporu-ekle');
    Route::get('/hasat-raporu-duzenle/{id}', 'App\Http\Controllers\Back\HasatRaporuController@hasatRaporuDuzenle')->name('admin.hasat-raporu-duzenle');
    Route::delete('/hasat-raporu-sil/{id}', 'App\Http\Controllers\Back\HasatRaporuController@raporSil')->name('admin.hasat-raporu-sil');
    /*HASAT RAPORLARI*/

    /* FOTO GALERİ */
    Route::get('/foto-galeri', 'App\Http\Controllers\Back\FotoGaleriController@index')->name('admin.foto-galeri');
    Route::get('/foto-galeri-ekle', 'App\Http\Controllers\Back\FotoGaleriController@fotoEkle')->name('admin.foto-galeri-ekle');
    Route::get('/foto-galeri-duzenle/{id}', 'App\Http\Controllers\Back\FotoGaleriController@fotoDuzenle')->name('admin.foto-galeri-duzenle');
    Route::delete('/foto-galeri-sil/{id}', 'App\Http\Controllers\Back\FotoGaleriController@fotoSil')->name('admin.foto-galeri-sil');
    /* FOTO GALERİ */

    /* TARİHÇE */
    Route::get('/tarihce', 'App\Http\Controllers\Back\TarihceController@index')->name('admin.tarihce');
    Route::get('/tarihce-ekle', 'App\Http\Controllers\Back\TarihceController@tarihceEkle')->name('admin.tarihce-ekle');
    Route::get('/tarihce-duzenle/{id}', 'App\Http\Controllers\Back\TarihceController@tarihceDuzenle')->name('admin.tarihce-duzenle');
    Route::delete('/tarihce-sil/{id}', 'App\Http\Controllers\Back\TarihceController@tarihceSil')->name('admin.tarihce-sil');
    /* TARİHÇE */

    /* ARCADIA FAUNA */
    Route::get('/arcadia-fauna', 'App\Http\Controllers\Back\ArcadiaFaunaController@index')->name('admin.arcadia-fauna');
    Route::get('/arcadia-fauna-ekle', 'App\Http\Controllers\Back\ArcadiaFaunaController@faunaEkle')->name('admin.arcadia-fauna-ekle');
    Route::get('/arcadia-fauna-duzenle/{id}', 'App\Http\Controllers\Back\ArcadiaFaunaController@faunaDuzenle')->name('admin.arcadia-fauna-duzenle');
    Route::delete('/arcadia-fauna-sil/{id}', 'App\Http\Controllers\Back\ArcadiaFaunaController@faunaSil')->name('admin.arcadia-fauna-sil');
    /* ARCADIA FAUNA */

    /* ÜRÜNLER */
    Route::get('/urunler', 'App\Http\Controllers\Back\Urun\Urunler@index')->name('admin.urunler');
    Route::get('/urun-ekle', 'App\Http\Controllers\Back\Urun\Urunler@urunEkle')->name('admin.urun-ekle');
    Route::get('/urun-duzenle/{id}', 'App\Http\Controllers\Back\Urun\Urunler@urunDuzenle')->name('admin.urun-duzenle');
    Route::delete('/urun-sil/{id}', 'App\Http\Controllers\Back\Urun\Urunler@urunSil')->name('admin.urun-sil');
    /* ÜRÜNLER */

    /* ÜRÜN KATEGORİLERİ */
    Route::get('/urun-kategorileri', 'App\Http\Controllers\Back\Urun\UrunKategorileri@index')->name('admin.urun-kategorileri');
    Route::get('/urun-kategorileri-ekle', 'App\Http\Controllers\Back\Urun\UrunKategorileri@urunKategoriEkle')->name('admin.urun-kategorileri-ekle');
    Route::get('/urun-kategorileri-duzenle/{id}', 'App\Http\Controllers\Back\Urun\UrunKategorileri@urunKategoriDuzenle')->name('admin.urun-kategorileri-duzenle');
    Route::delete('/urun-kategorileri-sil/{id}', 'App\Http\Controllers\Back\Urun\UrunKategorileri@urunKategoriSil')->name('admin.urun-kategorileri-sil');
    /* ÜRÜNLER KATEGORİLERİ */

    /* ÜYELİK BAŞVURULARI */
    Route::get('/uyelik-basvurulari', 'App\Http\Controllers\Back\UyelikBasvurusuController@talepler')->name('admin.uyelik-basvurulari');
    Route::get('/uyelik-basvurulari-detay/{id}', 'App\Http\Controllers\Back\UyelikBasvurusuController@basvuruDetay')->name('admin.uyelik-basvurulari-detay');
    Route::delete('/uyelik-basvurusu-sil/{id}', 'App\Http\Controllers\Back\UyelikBasvurusuController@basvuruSil')->name('admin.uyelik-basvurusu-sil');
    /* ÜYELİK BAŞVURULARI */


    Route::post('/resim-yukle', 'App\Http\Controllers\Back\Dashboard@resimYukle')->name('admin.resim-yukle');

    /* Sayfa Yönetimi */
    Route::get('/sayfalar', 'App\Http\Controllers\Back\Sayfa\SayfaController@sayfalar')->name('admin.sayfalar');
    Route::get('/sayfa-ekle', 'App\Http\Controllers\Back\Sayfa\SayfaController@sayfaEkle')->name('admin.sayfa-ekle');
    Route::post('/sayfa-kaydet', 'App\Http\Controllers\Back\Sayfa\SayfaController@sayfaKaydet')->name('admin.sayfa-kaydet');
    Route::get('/sayfa-duzenle/{uuid}', 'App\Http\Controllers\Back\Sayfa\SayfaController@sayfaDuzenle')->name('admin.sayfa-duzenle');
    Route::get('/sayfa-duzenle-editor/{uuid}', 'App\Http\Controllers\Back\Sayfa\SayfaController@sayfaDuzenleEditor')->name('admin.sayfa-duzenle-editor');
    Route::put('/sayfa-guncelle/{uuid}', 'App\Http\Controllers\Back\Sayfa\SayfaController@sayfaGuncelle')->name('admin.sayfa-guncelle');
    Route::delete('/sayfa-sil/{uuid}', 'App\Http\Controllers\Back\Sayfa\SayfaController@sayfaSil')->name('admin.sayfa-sil');
    Route::get('/sayfa-kategorileri', 'App\Http\Controllers\Back\Sayfa\SayfaKategoriController@sayfaKategorileri')->name('admin.sayfa-kategorileri');
    Route::get('/sayfa-kategori-duzenle/{uuid}', 'App\Http\Controllers\Back\Sayfa\SayfaKategoriController@sayfaKategoriDuzenle')->name('admin.sayfa-kategori-duzenle');
    Route::post('/sayfa-kategori-kaydet', 'App\Http\Controllers\Back\Sayfa\SayfaKategoriController@sayfaKategoriKaydet')->name('admin.sayfa-kategori-kaydet');
    Route::put('/sayfa-kategori-guncelle/{uuid}', 'App\Http\Controllers\Back\Sayfa\SayfaKategoriController@sayfaKategoriGuncelle')->name('admin.sayfa-kategori-guncelle');
    Route::delete('/sayfa-kategori-sil/', 'App\Http\Controllers\Back\Sayfa\SayfaKategoriController@sayfaKategoriSil')->name('admin.sayfa-kategori-sil');
    Route::delete('/sayfa-kategori-toplu-sil/', 'App\Http\Controllers\Back\Sayfa\SayfaKategoriController@sayfaKategoriTopluSil')->name('admin.sayfa-kategori-toplu-sil');
    /* Sayfa Yönetimi */

    /* Blog Yönetimi */
    Route::get('/bloglar', 'App\Http\Controllers\Back\Blog\BlogController@bloglar')->name('admin.bloglar');
    Route::get('/blog-ekle', 'App\Http\Controllers\Back\Blog\BlogController@blogEkle')->name('admin.blog-ekle');
    Route::post('/blog-kaydet', 'App\Http\Controllers\Back\Blog\BlogController@blogKaydet')->name('admin.blog-kaydet');
    Route::get('/blog-duzenle/{uuid}', 'App\Http\Controllers\Back\Blog\BlogController@blogDuzenle')->name('admin.blog-duzenle');
    Route::put('/blog-guncelle/{uuid}', 'App\Http\Controllers\Back\Blog\BlogController@blogGuncelle')->name('admin.blog-guncelle');
    Route::delete('/blog-sil/{uuid}', 'App\Http\Controllers\Back\Blog\BlogController@blogSil')->name('admin.blog-sil');
    /* Blog Yönetimi */

    /* Site Genel Ayarları */
    Route::get('/site-ayarlar', 'App\Http\Controllers\Back\SiteController@siteAyarlar')->name('admin.site-ayarlar');
    Route::put('/site-ayarlar-guncelle', 'App\Http\Controllers\Back\SiteController@siteAyarlarGuncelle')->name('admin.site-ayarlar-guncelle');
    /* Site Genel Ayarları */

    /* Kullanıcı Yönetimi */
    Route::get('/kullanicilar', 'App\Http\Controllers\Back\Kullanici\KullaniciController@kullanicilar')->name('admin.kullanicilar');
    Route::get('/kullanici-ekle', 'App\Http\Controllers\Back\Kullanici\KullaniciController@kullaniciEkle')->name('admin.kullanici-ekle');
    Route::post('/kullanici-kaydet', 'App\Http\Controllers\Back\Kullanici\KullaniciController@kullaniciKaydet')->name('admin.kullanici-kaydet');
    Route::get('/kullanici-duzenle/{id}', 'App\Http\Controllers\Back\Kullanici\KullaniciController@kullaniciDuzenle')->name('admin.kullanici-duzenle');
    Route::put('/kullanici-guncelle/{id}', 'App\Http\Controllers\Back\Kullanici\KullaniciController@kullaniciGuncelle')->name('admin.kullanici-guncelle');
    Route::delete('/kullanici-sil/{id}', 'App\Http\Controllers\Back\Kullanici\KullaniciController@kullaniciSil')->name('admin.kullanici-sil');
    /* Kullanıcı Yönetimi */

    /* Menü Yönetimi */
    Route::get('/menuler', 'App\Http\Controllers\Back\Tema\MenuController@menuler')->name('admin.menuler');
    Route::post('/menu-kaydet', 'App\Http\Controllers\Back\Tema\MenuController@menuKaydet')->name('admin.menu-kaydet');
    Route::get('/menu-duzenle/{uuid}', 'App\Http\Controllers\Back\Tema\MenuController@menuDuzenle')->name('admin.menu-duzenle');
    Route::put('/menu-guncelle/{uuid}', 'App\Http\Controllers\Back\Tema\MenuController@menuGuncelle')->name('admin.menu-guncelle');
    Route::delete('/menu-sil/{uuid}', 'App\Http\Controllers\Back\Tema\MenuController@menuSil')->name('admin.menu-sil');
    Route::post('/menu-sirala/', 'App\Http\Controllers\Back\Tema\MenuController@menuSirala')->name('admin.menu-sirala');
    /* Menü Yönetimi */

    /* Şablon Yönetimi */
    Route::get('/sablonlar', 'App\Http\Controllers\Back\Tema\TemaController@sablonlar')->name('admin.sablonlar');
    Route::post('/sablon-kaydet', 'App\Http\Controllers\Back\Tema\TemaController@sablonKaydet')->name('admin.sablon-kaydet');
    Route::get('/sablon-duzenle/{uuid}', 'App\Http\Controllers\Back\Tema\TemaController@sablonDuzenle')->name('admin.sablon-duzenle');
    Route::put('/sablon-guncelle/{uuid}', 'App\Http\Controllers\Back\Tema\TemaController@sablonGuncelle')->name('admin.sablon-guncelle');
    /* Şablon Yönetimi */




});
/* Admin */



/* Front Arcadia */


/*Route::view('/', 'front.homepage'); */
Route::get('/', 'App\Http\Controllers\Front\SiteAyarlariController@index')->name('/');
Route::get('/iletisim', 'App\Http\Controllers\Front\SiteAyarlariController@iletisim')->name('/iletisim');
Route::get('/arcadia-baglari/{slug}', 'App\Http\Controllers\Front\SiteAyarlariController@arcadiabaglari')->name('/arcadia-baglari');
Route::get('/arcadia-baglari/arcadiadan-haberler/{slug}', 'App\Http\Controllers\Front\SiteAyarlariController@arcadiadanhaberler')->name('/arcadiadan-haberler');
Route::get('/tarihce', 'App\Http\Controllers\Front\SiteAyarlariController@tarihce')->name('/tarihce');
Route::get('/basindan', 'App\Http\Controllers\Front\SiteAyarlariController@basindan')->name('/basindan');
Route::get('/hikayemiz/{slug}', 'App\Http\Controllers\Front\SiteAyarlariController@hikayemiz')->name('/hikayemiz');
Route::get('/teruar-saraplari', 'App\Http\Controllers\Front\SiteAyarlariController@teruarsaraplari')->name('/teruar-saraplari');
Route::get('/felsefemiz/{slug}', 'App\Http\Controllers\Front\SiteAyarlariController@felsefemiz')->name('/felsefemiz');
Route::get('/bakuchavineyard', 'App\Http\Controllers\Front\SiteAyarlariController@bakucha')->name('/bakucha');
Route::get('/arcadia-baglari/saraplarimiz/{slug}', 'App\Http\Controllers\Front\SiteAyarlariController@saraplarimiz')->name('front.saraplarimiz');

Route::post('/iletisimKaydet','App\Http\Controllers\Front\Iletisim@iletisimKaydet')->name('front.iletisim.kaydet');
Route::post('/arcadia-baglari/saraplarimiz','App\Http\Controllers\Front\UyelikBasvurusuController@giris')->name('front.giris.post');
Route::post('/uyelikBasvurusuKaydet','App\Http\Controllers\Front\UyelikBasvurusuController@uyelikBasvurusuKaydet')->name('front.uyelik-basvurusu.kaydet');


/* Front Arcadia */
