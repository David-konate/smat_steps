<?php

namespace Database\Seeders;

use App\Models\SmatUser;
use Illuminate\Database\Seeder;

class SmatUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SmatUser::factory(30)->create();
    }
}
