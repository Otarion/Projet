<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\SubType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subtypes = collect([
            'Création de personnage', 'Classes', 'Peuples', 'Compétences & Caractèristiques', 'Equipements', 'Sortilèges', 
            'Histoire', 'Géographie', 'Magie', 'Religions', 'Politique']);

        $subtypes->each(fn($subtype)=>SubType::create([
            'name'=> $subtype,
            'slug'=> Str::slug($subtype),
        ]));
    }
}
