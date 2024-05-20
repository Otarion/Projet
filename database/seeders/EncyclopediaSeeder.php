<?php

namespace Database\Seeders;

use App\Models\Encyclopedia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EncyclopediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Encyclopedia::factory(30)->create();
    }
}
