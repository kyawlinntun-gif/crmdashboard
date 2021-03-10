<?php

namespace Database\Seeders;

use App\Models\Today;
use Illuminate\Database\Seeder;

class TodaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Today::factory()->count(5)->create();
    }
}
