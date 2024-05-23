<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FAQ>
 */
class FAQFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'question'=> fake()->unique()->sentence('50').'?',
            'answer'=>fake()->paragraph('100'),
            'created_at'=>fake()->dateTimeInInterval('-1 year','+6 months'),
            'updated_at' =>fake()->dateTimeBetween('- 6 months', '+6 months'),
        ];
    }
}
