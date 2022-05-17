<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Course extends SoftDeleting implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $guarded = ['id'];

    /**
     * @return HasOne
     */
    public function level(): HasOne
    {
        return $this->hasOne(Level::class, 'id', 'level_id');
    }
}
