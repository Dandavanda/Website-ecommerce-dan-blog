<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $fillable = [
        'id_post',
        'id_users',
        'message',
    ];
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
