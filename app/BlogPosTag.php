<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPosTag extends Model
{
    
    public function blogpost()
    {
        return $this->belongsTo('App\BlogPost');
    }
    // public function tag()
    // {
    //     return $this->hasOneThrough('App\Tag', 'id');
    // }

    
}
