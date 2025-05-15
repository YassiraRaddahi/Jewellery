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
                'name' => 'Ring',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bracelet',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Necklace',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Earring',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
