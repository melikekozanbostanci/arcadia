<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Dil extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dil = [
            [
                'uuid' => (string)\Str::uuid(),
                'id' => 1,
                'dil' => 'Türkçe',
                'kod' => 'tr',
                'yazi' => 'Türkçe',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'uuid' => (string)\Str::uuid(),
                'id' => 2,
                'dil' => 'İngilizce',
                'kod' => 'en',
                'yazi' => 'English',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        \DB::table('diller')->insert($dil);
    }
}
