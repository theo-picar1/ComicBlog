<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['comic_id', 'content', 'user_id'];

    public function comic()
    {
        return $this->belongsTo(Comic::class);
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
