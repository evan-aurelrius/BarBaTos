<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'role' => 'admin',
            'name' => 'Nelsen Anggara',
            'email' => 'nelsen12anggara@gmail.com',
            'password' => hash::make('qweqweqwe'),
            'gender' => 'male',
            'dateOfBirth' => 12121212,
            'country' => 'jakarta'
        ]);

        User::insert([
            'role' => 'user',
            'name' => 'vivi',
            'email' => 'nelsen.anggara@binus.ac.id',
            'password' => hash::make('qweqweqwe'),
            'gender' => 'female',
            'dateOfBirth' => 15121222,
            'country' => 'jakarta'
        ]);
    }
}
