<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()->create([
            'name' => 'カテゴリA',
            'description' => 'カテゴリAの概要',
            'color' => '#fc8803'
        ]);
        Category::factory()->create([
            'name' => 'カテゴリB',
            'description' => 'カテゴリBの概要',
            'color' => '#07fc03'
        ]);
        Category::factory()->create([
            'name' => 'カテゴリC',
            'description' => 'カテゴリCの概要',
            'color' => '#0390fc'
        ]);
    }
}
