<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'path', 'backdrop_path', 'is_adult', 'genre_id', 'likes', 'dislikes', 'link', 'trailer'];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function actors()
    {
        return $this->belongsToMany(Actor::class);
    }

    public function getTotalRatingAttribute()
    {
        return $this->likes - $this->dislikes;
    }
}
