<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteAyarlari extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $site_ayarlari = [
            [
                'id' => 1,
                'site_adi' => 'Arcadia Vine Yards',
                'site_baslik' => 'Arcadia Vine Yards',
                'site_aciklama' => 'Arcadia Vine Yards',
                'site_anahtar_kelimeler' => 'Arcadia,Vine,Şarap',
                'site_telefon' => '+90 533 514 14 90',
                'site_eposta' => 'info@arcadiavineyards.com',
                'site_adres' => 'Hamitabat Köyü Lüleburgaz, 39750, Kırklareli',
                'site_facebook' => 'https://www.facebook.com/arcadiavineyard/',
                'site_instagram' => 'https://www.instagram.com/arcadiavineyard/',
                'site_twitter' => 'https://twitter.com/arcadiavineyard',
                'site_youtube' => 'https://www.youtube.com/@arcadiabaglarbakuchavineya5706',
                'site_google_harita' => '<iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7102.84597835145!2d27.296462654380594!3d41.539393498505156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1str!2str!4v1699968899630!5m2!1str!2str"
                            width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>',
                'site_google_analytics' => '123456',
                'fotograf_ana_baslik' => 'Doğanın Eşsiz Mirasını Şaraplarımıza Taşıyoruz',
                'baslik_1' => 'SÜRDÜREBİLİRLİK FELSEFEMİZ',
                'alt_baslik_1' => 'Arcadia Bağları',
                'aciklama_1' => 'Arcadia Şarapları’nın en büyük özelliği minimum manipülasyonla yapılmış yaşayan şaraplar olmaları. Bağda üzümlerin yetiştirilmesinde gösterilen özen, her bir salkımın ayrı ayrı elle toplanması ile devam ediyor. Üzümün kendi lezzetini kaybetmemesi için, işlemeye girene kadar hiçbir şekilde yırtılmaması, şıranın akmaması ve kabuğunun zarar görmemesi çok önemli.<br />
Bu yüzden Arcadia Bağları’nın hasadı bıçakla değil makasla yapılıyor. Üzümler birbirinin ağırlığıyla ezilip suları akmasın diye delikli küçük sepetlerle taşınıyor. Üretim süreciyle ilgili bu detaylar şarabın doğallığını ve kalitesini belirleyen önemli etkenler.<br />
',
                'fotograf_yazi_1' => 'Geleneksel Yöntemlerle',
                'fotograf_yazi_2' => 'Teruar Şarapları',
                'baslik_2' => 'ÜZÜMLERİMİZ',
                'alt_baslik_2' => '9 farklı cins üzüm',
                'aciklama_2_1' => 'CABERNET SAUVIGNON<br />
CABERNET FRANC<br />
MERLOT<br />
SANGIOVESE<br />
ÖKÜZGÖZÜ<br />
PAPASKARASI',
                'aciklama_2_2' => 'SAUVIGNON BLANC<br />
SAUVIGNON GRIS<br />
PINOT GRIS<br />
NARİNCE',
                'baslik_3' => 'BAKUCHA VINEYARD HOTEL',
                'alt_baslik_3' => 'Doğanın Ortasında',
                'aciklama_3' => 'Lüks kavramının gerçek ve lezzetli gıda, doğayla iç içe ve israftan uzak bir tatil deneyimi olarak yeniden tanımlandığı günümüzde, Bakucha Vineyard tüm bunları doğallık, sadelik ve zarafet ile harmanlayan bir bakış ile sunarak, doğayla bütünleşik otel anlayışını tüm kıstaslarıyla karşılayan özgün bir alan yaratıyor.',
                'fotograf_ana' => '',
                'fotograf_1' => '',
                'fotograf_2' => '',
                'fotograf_3' => '',
                'fotograf_4' => '',
                'fotograf_5' => '',
                'fotograf_6' => '',
                'fotograf_7' => '',
                'fotograf_8' => '',


            ]
        ];
        DB::table('site_ayarlari')->insert($site_ayarlari);
    }
}
