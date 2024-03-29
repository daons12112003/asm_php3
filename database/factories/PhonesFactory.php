<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Phones>
 */
class PhonesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),          
            'price'=> fake()->numerify(),
            'description'=>fake()->text(50),
            'brand'=>fake()->text(50),
            'category_id'=>fake()->number()
        ];
    }
}
