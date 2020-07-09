<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pertanyaan;
use App\User;

class Jawaban extends Model
{
    protected $table = 'jawaban';
    protected $fillable = ['isi','pertanyaan_id', 'user_id'];

    public function pertanyaan()
    {
    	return $this->belongsTo(Pertanyaan::class, 'pertanyaan_id');
    }

    public function user()
    {
    	return $this->belongsTo(User::class, 'user_id');
    }

}
