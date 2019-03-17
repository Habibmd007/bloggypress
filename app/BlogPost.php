<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    public function slider()
    {
        return $this->hasOne('App\Slider', 'blogpost_id');
    }

    public function blogpostgallery()
    {
        return $this->hasOne(BlogPostGallery::class, 'blogpost_id');
    }

    
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
   
    public function category()
    {
        return $this->belongsTo('App\BlogCategory', 'cat_id');
    }

    
    public function blogpostag()
    {
        return $this->hasMany('App\BlogPosTag', 'post_id');
    }
    
    
    
}
