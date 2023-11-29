<?php

namespace Database\Seeders;

use App\Models\Back\Kullanici\Role;
use Illuminate\Database\Seeder;

class AdminRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'name' => 'Super Admin',
        ]);
    }
}
