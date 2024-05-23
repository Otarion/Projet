<?php

namespace Database\Seeders;

use Illuminate\Database\Eloquent\Collection;
use App\Models\Encyclopedia;
use App\Models\SubType;
use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EncyclopediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = Type::all();
        $subtypes = SubType::all();

        Encyclopedia::factory(30)
        ->sequence(fn () => [
            'type_id' => $types->random(),
        ])
        ->create()
        ->each(fn ($encyclopedia) => $encyclopedia->subtypes->attach($subtypes->random(rand(1, 2))));
}
    }
