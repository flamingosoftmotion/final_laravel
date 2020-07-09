<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pertanyaan;
use App\Jawaban;
use App\User;

class Komentar extends Model
{
    protected $table = 'komentar';
    protected $fillable = ['komentar','user_id', 'pertanyaan_id', 'jawaban_id'];

    public function jawaban()
    {
    	return $this->belongsTo(Jawaban::class, 'jawaban_id');
    }

    // public function komentar()
    // {
    // 	return $this->hasMany(Komentar::class, 'id');
    // }

    public function user()
    {
    	return $this->belongsTo(User::class, 'user_id');
    }

}
