<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Level extends SoftDeleting
{
    use HasFactory;
    protected $guarded = ['id'];

    public function teacher(): HasOne
    {
        return $this->hasOne(Teacher::class, 'id', 'teacher_id');
    }
}
