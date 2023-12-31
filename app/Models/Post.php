<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'cover_image', 'user_id'];

    protected static function boot()
    {
        parent::boot();

    //     static::creating(function ($post) {
    //         $post->user_id = Auth::id(); 
    //     });
    // }

    static::creating(function ($post) {
        $user = Auth::user();
        $post->user_id = $user ? $user->id : 1; // Stel de user_id in op de ingelogde gebruiker of gebruik een standaardwaarde (bijv. 1).
    });
}

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
