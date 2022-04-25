<?php

namespace Database\Factories;

use App\Models\Level;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
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
            'title_uz' => $this->faker->text(50),
            'description_uz' => $this->faker->text(80),
            'title_ru' => $this->faker->text(50),
            'description_ru' => $this->faker->text(80),
            'title_en' => $this->faker->text(50),
            'description_en' => $this->faker->text(80),
            'from_time' => $this->faker->time('H:i'),
            'to_time' => $this->faker->time('H:i'),
            'level_id' => $level->id,
            'image' => $this->faker->imageUrl(),
        ];
    }
}
