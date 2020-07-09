<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table = 'pertanyaan';
    protected $fillable = ['isi','judul','tags'];
    protected $casts = ['tags' => 'array'];
    
    public function jawaban()
    {
    	return $this->hasMany(Jawaban::class, 'id');
    }
}
