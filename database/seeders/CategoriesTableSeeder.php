<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => 'Rings',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bracelets',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Necklaces',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Earrings',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
