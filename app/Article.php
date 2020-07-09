<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Article extends Model
{
	protected $fillable = [
        'article', 'title', 'category', 'picture', 'img-title'
    ];
	
    public function creator()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
	public function comments()
    {
        return $this->hasMany('App\Comment', 'article_id')->orderBy('created_at', 'desc');
    }
    public function likes()
    {
        return $this->hasMany('App\Like', 'article_id')->orderBy('created_at', 'desc');
    }
}
