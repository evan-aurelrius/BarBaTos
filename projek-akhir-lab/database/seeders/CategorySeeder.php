<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => "Laptop"
        ]);
        DB::table('categories')->insert([
            'name' => "Smart Watch"
        ]);
        DB::table('categories')->insert([
            'name' => "Headset"
        ]);
        DB::table('categories')->insert([
            'name' => "Face Mask"
        ]);
        DB::table('categories')->insert([
            'name' => "Keyboard"
        ]);
        DB::table('categories')->insert([
            'name' => "Monitor"
        ]);
        DB::table('categories')->insert([
            'name' => "Mouse"
        ]);
        DB::table('categories')->insert([
            'name' => "Mouse Pad"
        ]);

    }
}
