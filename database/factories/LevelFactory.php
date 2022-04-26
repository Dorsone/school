<?php

namespace Database\Factories;

use App\Models\Teacher;
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
        $teacher = Teacher::query()->inRandomOrder()->first();
        return [
            'name_uz' => $this->faker->word(),
            'name_ru' => $this->faker->word(),
            'name_en' => $this->faker->word(),
            'teacher_id' => $teacher->id,
            'from_time' => $this->faker->time('H:i'),
            'to_time' => $this->faker->time('H:i'),
            'status' => $this->faker->numberBetween(0, 1),
        ];
    }
}
