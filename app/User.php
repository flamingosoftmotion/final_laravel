<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
// use App\Pertanyaan;
// use App\Jawaban;
// use App\Komentar;

class User extends Authenticatable
{
    use Notifiable;

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

    // public function pertanyaan()
    // {
    //     return $this->hasMany(Pertanyaan::class, 'pertanyaan_id', );
    // }

    // public function jawaban()
    // {
    //     return $this->hasOne(Jawaban::class);
    // }

    // public function komentar()
    // {
    //     return $this->hasMany(Komentar::class);
    // }

    // public function pertanyaan() //tambahan (s) karena user memiliki banyak post
    // {
    //     return $this->hasMany(Pertanyaan::class, 'pertanyaan_id');
    // }

    public function getAvatar()
     {
        //jika tidak ada avatar yang terupload. maka avatar akan terdefault menggunakan default-avatar.jpg
         //if(!$this->avatar){ 
         //    return asset('images/default-avatar.png');
         //}
         //return asset('images/'.$this->avatar);

        return !$this->avatar ? asset('images/default-avatar.png') : $this->avatar;
     }

     public function siswa()
     {
         return $this->hasOne(Siswa::class);
     }
}
