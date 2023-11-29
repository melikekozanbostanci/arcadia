<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Blog extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $blog = [
            [
                'uuid' => (string)\Str::uuid(),
                'id' => 1,
                'baslik' => 'Blog 1',
                'zaman' => '19 Mayıs 2023',
                'mekan' => ' Tadım , Bağ Gezisi',
                'slug' => 'blog-1',
                'icerik' => 'Blog 1 içeriği',
                'admin_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        \DB::table('bloglar')->insert($blog);
    }
}
