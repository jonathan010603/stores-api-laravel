<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Store>
 */
class StoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(3, true),
            'email' => $this->faker->email(),
            'phone' => $this->faker->phoneNumber(),
            'zipcode' => $this->faker->postcode(),
            'description' => $this->faker->sentence()
        ];
    }
}
