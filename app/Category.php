<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     protected $fillable = ['title'];

    public function news()
    {
       // dd($this->hasMany(Post::class));
    	return $this->hasMany(News::class);
    }
}
