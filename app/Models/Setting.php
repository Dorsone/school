<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends SoftDeleting
{
    use HasFactory;

    protected $guarded = ['id'];
}
