<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->text('title_uz');
            $table->text('content_uz');
            $table->string('title_preview_uz');
            $table->string('content_preview_uz');
            $table->text('title_ru');
            $table->text('content_ru');
            $table->string('title_preview_ru');
            $table->string('content_preview_ru');
            $table->text('title_en');
            $table->text('content_en');
            $table->string('title_preview_en');
            $table->string('content_preview_en');
            $table->integer('user_id');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
