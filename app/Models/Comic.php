<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'comment_count', 'image_path'];

    // States that Comic has a one-to-many relationship with the Comment table
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
