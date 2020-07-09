<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role','avatar'
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

    public function getAvatar()
     {
        //jika tidak ada avatar yang terupload. maka avatar akan terdefault menggunakan default-avatar.jpg
         //if(!$this->avatar){ 
         //    return asset('images/default-avatar.png');
         //}
         //return asset('images/'.$this->avatar);

        return !$this->avatar ? asset('images/default-avatar.png') : $this->avatar;
     }

    
}
