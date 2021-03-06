<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model {
    use HasFactory;

    protected $fillable = ['title', 'genre', 'storyline', 'release_date', 'director'];

    public function comments() {
        return $this->hasMany(Comment::class)->orderBy('created_at', 'desc');
    }
}
