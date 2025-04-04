<?php

namespace Database\Seeders;

use App\Models\AdminUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        AdminUser::create([
            'name' => 'admin',
            'email' => 'admin@glimsol.com',
            'password' => Hash::make(env('ADMIN_PASS')),
            'role' => 'admin',
        ]);
    }
}
