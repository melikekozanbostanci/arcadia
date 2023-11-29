<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Menu extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menuler = [
            [
                'uuid' => (string)\Str::uuid(),
                'id' => 1,
                'dil' => "tr",
                'baslik' => 'Genel',
                'slug' => 'genel',
                'konum' => 'Header',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'uuid' => (string)\Str::uuid(),
                'id' => 2,
                'dil' => "tr",
                'baslik' => 'Teknoloji',
                'slug' => 'teknoloji',
                'konum' => 'Footer Orta',
                'created_at' => now(),
                'updated_at' => now(),
            ],

        ];

        \DB::table('menuler')->insert($menuler);

    }
}
