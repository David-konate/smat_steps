<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'category' => 'Univer',
        ]);

        Category::create([
            'category' => 'Character',
        ]);

        Category::create([
            'category' => 'Story',
        ]);
        Category::create([
            'category' => 'Team',
        ]);
        Category::create([
            'category' => 'History ',
        ]);
    }
}
