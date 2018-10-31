<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Category;

class News extends Model

{
	protected $fillable = ['title','content', 'date', 'description','category_id'];


     public function category()
    {
    	return $this->belongsTo(Category::class);	
    }
}
