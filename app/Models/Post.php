<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'cover_image', 'publishing_date', 'user_id'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            $post->user_id = Auth::id(); // Set the user ID
            $post->publishing_date = now(); // Set the current timestamp as the publishing date
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
