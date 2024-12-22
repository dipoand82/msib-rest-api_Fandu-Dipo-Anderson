<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    // Tambahkan pengguna manual
    \App\Models\User::create([
        'name' => 'Admin User', // Nama pengguna
        'email' => 'admin@example.com', // Email pengguna
        'password' => Hash::make('password'), // Password harus di-hash
    ]);
        $this->call([
            ProductsSeeder::class,
        ]);
    }
}
