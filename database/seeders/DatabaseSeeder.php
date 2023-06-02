<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
//            UserSeeder::class,
//            ArticleSeeder::class,
//            TeacherSeeder::class,
//            LevelSeeder::class,
//            CourseSeeder::class,
//            StudentSeeder::class,
//            ReviewsSeeder::class,
            SettingSeeder::class,
//            MessageSeeder::class,
        ]);
    }
}
