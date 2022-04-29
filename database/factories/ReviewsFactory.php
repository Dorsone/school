<?php

namespace Database\Factories;

use App\Models\Level;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $level = Level::query()->inRandomOrder()->first();
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'phone' => $this->faker->phoneNumber(),
            'message' => $this->faker->text(),
            'level_id' => $level->id,
            'role' => $this->faker->randomElement(['mother', 'father']),
            'status' => $this->faker->randomElement([true, false]),
        ];
    }
}
