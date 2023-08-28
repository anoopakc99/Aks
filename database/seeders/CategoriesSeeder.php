<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Category 1'],
            ['status' => '1'],
           
            ['name' => 'Category 2'],
            // Add more categories as needed
        ]);
    }
}
