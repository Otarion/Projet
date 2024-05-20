<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Encyclopedia>
 */
class EncyclopediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->unique()->sentence;

        return [
            'title'=>$title,
            'slug'=>Str::slug($title),
            'content'=> fake()->paragraphs(asText:true),
            'thumbnail'=> fake()->imageUrl(),
            'created_at'=>fake()->dateTimeInInterval('-1 year','+6 months'),
            'updated_at' =>fake()->dateTimeBetween('- 6 months', '+6 months'),
        ];
    }
}
