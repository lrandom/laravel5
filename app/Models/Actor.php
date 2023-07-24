<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;

    public function films()
    {
        return $this->belongsToMany(Film::class, "actor_films", "actor_id", "film_id");
    }

    public function image()
    {
        return $this->morphOne(Image::class, 'imageable');
    }
}
