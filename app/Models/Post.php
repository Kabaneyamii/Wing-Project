<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'content',
        'parent_post_id',
        'base_post_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function retweets()
    {
        return $this->hasMany(Retweet::class);
    }

    public function bookmarks()
    {
        return $this->hasMany(Bookmark::class);
    }

    public function replies()
    {
        return $this->hasMany(Post::class, 'parent_post_id');
    }

    public function parent()
    {
        return $this->belongsTo(Post::class, 'parent_post_id');
    }

    public function base()
    {
        return $this->belongsTo(Post::class, 'base_post_id');
    }

    public function notifications()
    {
        return $this->hasMany(Notification::class);
    }
}
