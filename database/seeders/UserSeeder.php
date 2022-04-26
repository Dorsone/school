<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->create([
            'login' => "admin",
            'name_uz' => "Admin Adminov",
            'name_ru' => "Админ Админов",
            'name_en' => "Admin Adminov",
            'phone' => "998991234567",
            'role' => 3,
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
        ]);

        User::factory(9)->create();
    }
}
