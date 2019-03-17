<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    
    public function blogpostag()
    {
        return $this->hasMany('App\BlogPosTag');
    }
    
}
