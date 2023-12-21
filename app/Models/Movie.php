<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'releaseDate', 'runningTime', 'director', 'producer', 'actor', 'image', 'genreId'];

    public function genre(){
        return $this->belongsTo(Genre::class, 'genreId');
    }
}
