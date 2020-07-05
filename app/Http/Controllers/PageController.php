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
		return view('index', compact('articles'));
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
