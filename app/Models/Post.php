<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\DocBlock\Tag;

class Post extends Model
{
    use HasFactory;

    public function images()
    {
        return $this->hasMany(Image::class, 'imageable_id', 'id');
    }

    public function categories(){
        return $this->morphToMany(Category::class, 'categoriables');
    }

    public function tags(){
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
