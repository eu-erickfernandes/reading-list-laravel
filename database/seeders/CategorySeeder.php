<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        $initialCategories = [
            ['name' => 'Action'],
            ['name' => 'HQ'],
            ['name' => 'Science'],
        ];

        DB::table('categories')->insert($initialCategories);
    }
}
