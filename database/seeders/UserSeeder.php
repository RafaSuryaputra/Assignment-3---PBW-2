<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'fullname' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'username' => 'admin',
            'address' => 'Jl. Mangga Dua, Desa Sukapura Telkom University',
            'phoneNumber' => '085174309823',
            'birthdate' => '2004-12-13',
            'agama' => 'islam',
            'jenisKelamin' => '1',

        ]);
    }
}
