<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
	use Sluggable;

	protected $fillable = ['title','content','thumbnail','slug','user_id'];
	protected $dates = ['created_at'];

    public function user()
    {
    	return $this->belongsTo(User::class); //post dimiliki oleh user
    }

    public function sluggable()
    {
        return [
            'slug' => [ //slug akan mengambil dari title
                'source' => 'title'
            ]
        ];
    }
}
