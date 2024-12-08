<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Character extends Model
{
    protected $fillable = [
        'image',
        'name',
        'type',
        'appearance',
        'description',
    ];

    public function ratings()
    {
        return $this->belongsTo(Rating::class);
    }
}

