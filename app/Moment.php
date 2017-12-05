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


}
