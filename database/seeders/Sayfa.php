<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Sayfa extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sayfa = [
            [
                'uuid' => (string)\Str::uuid(),
                'id' => 1,
                'baslik' => 'Hakkımızda',
                'slug' => 'hakkimizda',
                'icerik' => 'Hakkımızda sayfası içeriği',
                'admin_id' => 1,
                'kategori_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'uuid' => (string)\Str::uuid(),
                'id' => 2,
                'baslik' => 'İletişim',
                'slug' => 'iletisim',
                'icerik' => 'İletişim sayfası içeriği',
                'admin_id' => 1,
                'kategori_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'uuid' => (string)\Str::uuid(),
                'id' => 3,
                'baslik' => 'Gizlilik Politikası',
                'slug' => 'gizlilik-politikasi',
                'icerik' => 'Gizlilik Politikası sayfası içeriği',
                'admin_id' => 1,
                'kategori_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'uuid' => (string)\Str::uuid(),
                'id' => 4,
                'baslik' => 'Kullanım Koşulları',
                'slug' => 'kullanim-kosullari',
                'icerik' => 'Kullanım Koşulları sayfası içeriği',
                'admin_id' => 1,
                'kategori_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        \DB::table('sayfalar')->insert($sayfa);

    }
}
