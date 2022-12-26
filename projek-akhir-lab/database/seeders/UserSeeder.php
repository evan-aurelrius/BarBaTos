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
            'email' => 'nelsen.anggara@binus.ac.id',
            'password' => hash::make('adminnelsen'),
            'gender' => 'male',
            'dateOfBirth' => 20020512,
            'country' => 'jakarta'
        ]);

        User::insert([
            'role' => 'user',
            'name' => 'user0001',
            'email' => 'user0001@gmail.com',
            'password' => hash::make('user0001'),
            'gender' => 'female',
            'dateOfBirth' => 20021212,
            'country' => 'jakarta'
        ]);

        User::insert([
            'role' => 'user',
            'name' => 'user0002',
            'email' => 'user0002@gmail.com',
            'password' => hash::make('user0002'),
            'gender' => 'male',
            'dateOfBirth' => 20020103,
            'country' => 'jakarta'
        ]);
    }
}
