<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubcategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('subcategories')->insert([
            ['name' => 'Subcategory 1', 'category_id' => 1],
            ['name' => 'Subcategory 2', 'category_id' => 1],
            ['status' => '1'],
         
            ['name' => 'Subcategory 3', 'category_id' => 2],
            // Add more subcategories as needed
        ]);
    }
}
