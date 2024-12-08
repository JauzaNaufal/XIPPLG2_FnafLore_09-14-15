<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class rating extends Model
{
    protected $fillable = [
        'character_id',
        'name',
        'description',
        'rating',
        'content',
    ];


    public function character()
    {
        return $this->hasMany(Character::class);
    }
}
