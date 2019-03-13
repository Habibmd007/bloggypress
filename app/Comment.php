<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    
    public function blog_post()
    {
        return $this->belongsTo('App\BlogPost');
    }

    
    public function reply()
    {
        return $this->hasMany('App\Reply', 'comment_id');
    }
    
    
    
}
