<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UrunKategorileriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategori = [
            [
                'id' => 1,
                'kategori_adi' => 'A Serisi'
            ],
            [
                'id' => 2,
                'kategori_adi' => 'Mono Serisi'
            ],
            [
                'id' => 3,
                'kategori_adi' => 'Koleksiyon Serisi'
            ],
        ];

        DB::table('urun_kategorileri')->insert($kategori);
    }
}
