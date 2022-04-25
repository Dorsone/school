<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'login' => $this->faker->unique()->userName(),
            'name_uz' => $this->faker->name(),
            'name_ru' => $this->faker->name(),
            'name_en' => $this->faker->name(),
            'phone' => $this->faker->unique()->phoneNumber(),
            'role' => $this->faker->numberBetween(0, 2),
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
        ];
    }
}
