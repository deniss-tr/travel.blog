<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Contact;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index()
	{
		$articles = Article::orderBy('created_at', 'desc')->get();
		$catArr = $articles->map(function ($article) {
			return $article->category;
		})->toArray();

		$categorys = array_count_values($catArr);
		$dates = $articles->map(function($item) {
				return date("F",strtotime($item->created_at));
			});	
		$dates = array_count_values($dates->toArray());
		
		$random1 = $articles->random();
		$random2 = $articles->random(); 
		
		return view('index', compact('articles', 'categorys', 'dates', 'random1', 'random2'));
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

	public function newContact(Request $req)
	{
		$validation = $req->validate([
			'name' => 'required|max:50',
			'email' => 'required',
			'message' => 'max:10000',
		]);
		$contacts = new Contact();
		$contacts->name = $req->input('name');
		$contacts->email = $req->input('email');
		$contacts->message = $req->input('message');
		$contacts->form = 'contactme';
		$contacts->save();

		return redirect('/');
	}
	public function newSub(Request $req)
	{
		$validation = $req->validate([
			'subs-email' => 'required',
		]);
		$c = new Contact();
		$c->name = 'guest';
		$c->email = $req->input('subs-email');
		$c->form = 'newsletter';
		$c->save();

		return redirect('/');
	}
}
