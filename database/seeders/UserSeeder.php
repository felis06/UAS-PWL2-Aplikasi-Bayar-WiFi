<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'user',
            'email' => 'user@example.com',
            'password' => bcrypt('user'),
            'telp' => "081232444232",
            'saldo' => 5000000,
            'pin' => 123456,
        ]);
    }
}
