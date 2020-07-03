<?php

namespace App\Http\Controllers;
use App\Article;
use App\User;


use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function posts()
	{
		$articles = Article::paginate();
		
		
		return view('posts', compact('articles'));
	}
}
