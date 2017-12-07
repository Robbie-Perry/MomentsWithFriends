<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Moment extends Model
{
    protected $fillable = [
        'user_id', 'title', 'body', 'private', 'tag_id'
    ];

    protected $hidden = [

    ];

    public function scopeIsPublic($query) {
        return $query->where('private', 0);
    }

    public function scopeUserMoments($query, $userId) {
        return $query->where('tag_id', $userId)->orWhere('user_id', $userId);
    }
}
