<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function images()
    {
        return $this->hasMany(Image::class, 'imageable_id', 'id');
    }
}
