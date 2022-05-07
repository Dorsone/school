<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Student extends SoftDeleting
{
    use HasFactory;


    /**
     * @return HasOne
     */
    public function level(): HasOne
    {
        return $this->hasOne(Level::class, 'id', 'level_id');
    }

}
