<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class PageController extends Controller
{
    public function index()
	{
		$articles = Article::paginate(2);
		
		return view('index', compact('articles'));
	}
	
	public function gallery()
	{
		return view('gallery');
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
