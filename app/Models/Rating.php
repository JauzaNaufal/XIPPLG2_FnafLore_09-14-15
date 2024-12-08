<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    
    protected $fillable = [
        'animatronic_id',
        'name',
        'description',
        'rating',
        'content',
    ];
}
