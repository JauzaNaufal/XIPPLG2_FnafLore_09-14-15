<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = [
        'animatroni_id',
        'name',
        'description',
        'rating',
        'content',
    ];

    public function animatronic()
    {
        return $this->belongsTo(Animatronic::class);
    }
}
