<?php

namespace Database\Seeders;

use App\Models\Back\Admin;
use App\Models\Back\Kullanici\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin kullanıcısını oluşturun
        $admin = Admin::create([
            'name' => 'Süper Admin',
            'email' => 'admin@example.com',
            'avatar' => 'https://ui-avatars.com/api/?name=Süper+Admin&color=7F9CF5&background=EBF4FF',
            'email_verified_at' => now(),
            'password' => Hash::make('123456'),
        ]);

        // Süper Admin rolünü alın
        $superAdminRole = Role::where('name', 'Super Admin')->first();

        // Admin kullanıcısına Süper Admin rolünü atayın

        $admin->roles()->attach($superAdminRole);
    }
}
