<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SayfaKategori extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategori = [
            [
                'uuid' => (string)\Str::uuid(),
                'id' => 1,
                'kategori_adi' => 'Genel',
                'slug' => 'genel',
                'dil' => 'tr',
                'admin_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ];

        \DB::table('sayfa_kategorileri')->insert($kategori);
    }
}
