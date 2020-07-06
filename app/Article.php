<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Article extends Model
{
    public function creator()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
	public function comments()
    {
        return $this->hasMany('App\Comment', 'article_id')->orderBy('created_at', 'desc');
    }
    public function addLike()
    {
        
    }
}
