<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = collect(['Important', 'Secondaire']);
        $categories->each(fn ($category)=>Category::create([
            'name'=>$category,
            'slug'=>Str::slug($category),
        ]));
    }
}
