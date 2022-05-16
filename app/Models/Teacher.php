<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Teacher extends SoftDeleting implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $guarded = ['id'];
}
