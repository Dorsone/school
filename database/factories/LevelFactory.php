<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LevelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_uz' => $this->faker->word(),
            'name_ru' => $this->faker->word(),
            'name_en' => $this->faker->word(),
            'from_time' => $this->faker->time('H:i'),
            'to_time' => $this->faker->time('H:i'),
            'status' => $this->faker->numberBetween(0, 1),
        ];
    }
}
