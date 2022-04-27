<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_uz' => $this->faker->name(),
            'role_uz' => $this->faker->word(),
            'description_uz' => $this->faker->text(100),
            'name_ru' => $this->faker->name(),
            'role_ru' => $this->faker->word(),
            'description_ru' => $this->faker->text(100),
            'name_en' => $this->faker->name(),
            'role_en' => $this->faker->word(),
            'description_en' => $this->faker->text(100),
            'facebook' => $this->faker->url(),
            'twitter' => $this->faker->url(),
            'instagram' => $this->faker->url(),
            'telegram' => $this->faker->url(),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
