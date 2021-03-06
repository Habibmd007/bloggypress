<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    use Notifiable;


    public function blogpost()
    {
        return $this->hasMany('App\BlogPost');
    }

    public function role()
    {
            return $this->belongsTo('App\role');
    }

    
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function bio()
    {
        return $this->hasOne('App\Bio');
    }
    


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','country','state','gender','username','date_of_birth', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
