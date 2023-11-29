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
                'site_google_analytics' => '123456'

            ]
        ];
        DB::table('site_ayarlari')->insert($site_ayarlari);
    }
}
