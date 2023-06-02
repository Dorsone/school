<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('login')->unique();
            $table->string('name_uz');
            $table->string('name_ru')->nullable();
            $table->string('name_en')->nullable();
            $table->string('phone')->unique();
            $table->string('password');
            $table->boolean('role')->default(true);
            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();
        });

        User::query()->create([
            'login' => "admin",
            'name_uz' => "Admin Adminov",
            'name_ru' => "Админ Админов",
            'name_en' => "Admin Adminov",
            'phone' => "998991234567",
            'role' => 3,
            'password' => bcrypt('v-67vFSDJxCf;F<'),
            'remember_token' => Str::random(10),
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
