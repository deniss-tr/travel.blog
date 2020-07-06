<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index()
	{
		$articles = Article::orderBy('created_at', 'desc')->paginate(2);
		$categorys = DB::table('articles')->pluck('category');
		$categorys = array_count_values($categorys->toArray());
		
		$dates = DB::table('articles')
			->pluck('created_at')
			->map(function($item) {
				return date("F",strtotime($item));
			});	
		$dates = array_count_values($dates->toArray());
		
		return view('index', compact('articles', 'categorys', 'dates'));
	}
	
	public function gallery()
	{
		$pictures = DB::table('articles')
			->orderBy('created_at', 'desc')
			->pluck('picture', 'picture_title')
			->take(9);
		return view('gallery', compact('pictures'));
	}
	
	
	public function signin()
	{
		return view('signin');
	}
	
	public function signup()
	{
		return view('signup');
	}
}
