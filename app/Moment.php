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
        return $query->where('private', false);
    }

    public function scopeIsPrivate($query) {
        return $query->where('private', true);
    }


}
