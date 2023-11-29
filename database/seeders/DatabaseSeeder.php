<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AdminRoleSeeder::class,
            AdminUserSeeder::class,
            Dil::class,
            SayfaKategori::class,
            Sayfa::class,
            Blog::class,
            Menu::class,
            SiteAyarlari::class,
        ]);
    }
}
