<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UrunlerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $urunler = [
            [
                'id' => 1,
            'urun_adi' => 'Blend A',
            'baslik' => 'ARCADIA - İlktepe - Sangiovese Merlot',
            'aciklama' => 'ARCADIA - İlktepe - Sangiovese Merlot Açıklama',
            'urunler_kategori_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        DB::table('urunler')->insert($urunler);
    }
}
