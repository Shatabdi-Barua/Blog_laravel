<?php

namespace App\Models\user;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    public function post()
    {
        // return $this->belongsTo(Post::class);
        return $this->belongsToMany('App\Models\user\post', 'post_tags');
    }
    
}
