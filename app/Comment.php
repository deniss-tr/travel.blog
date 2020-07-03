<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function creator()
    {
        return $this->belongsTo('App\User', 'article_id');
    }
	public function article()
    {
        return $this->belongsTo('App\Article', 'article_id');
    }
}
