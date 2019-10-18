<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    use Notifiable;
    protected $table= 'users';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    public function posts(){
        return $this->hasMany('App\Post', 'author_id', 'id');
    }
    
    protected $fillable = [
        'name','email','email_verified_at','password','remember_token','created_at','updated_at','role_id'
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
