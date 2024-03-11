<?php

// SmatSeeder.php

namespace Database\Seeders;

use App\Models\Smat;
use Illuminate\Database\Seeder;

class SmatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Smat::factory(20)->configure()->create();
    }
}
