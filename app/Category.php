<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['cat_name'];

     public function posts()
    {
        return $this->hasMany('App\Post','category_id','id');
    }


    public function setPostAttribute($value)
    {
    	return $this->posts->count();
    }
}
