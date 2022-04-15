<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taggable extends Model
{
    use HasFactory;

    public function posts(){
        return $this->morphedByMany(Post::class, 'taggable');
    }

    public function references(){
        return $this->morphedByMany(Reference::class, 'taggable');
    }
}
