<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user = User::query()->inRandomOrder()->first();
        return [
            'title_uz' => $this->faker->text(250),
            'content_uz' => $this->faker->text(500),
            'title_preview_uz' => $this->faker->text(50),
            'content_preview_uz' => $this->faker->text(80),
            'title_ru' => $this->faker->text(250),
            'content_ru' => $this->faker->text(500),
            'title_preview_ru' => $this->faker->text(50),
            'content_preview_ru' => $this->faker->text(80),
            'title_en' => $this->faker->text(250),
            'content_en' => $this->faker->text(500),
            'title_preview_en' => $this->faker->text(50),
            'content_preview_en' => $this->faker->text(80),
            'user_id' => $user->id,
            'image' => $this->faker->imageUrl(),
        ];
    }
}
