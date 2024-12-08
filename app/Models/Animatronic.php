<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animatronic extends Model
{
    
    protected $fillable = [
        'image',
        'name',
        'type',
        'appreance',
        'description',
    ];
    
    public function ratings()
    {
        return $this->belongsTo(Rating::class);
    }
}
