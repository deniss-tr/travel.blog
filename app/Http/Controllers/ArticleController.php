<?php

namespace App\Http\Controllers;
use App\Article;
use App\User;
use App\Like;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Intervention\Image\ImageManagerStatic as Image;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
	protected function getLike($userId, $articleId) {
		$like = \DB::table('likes')
            ->where('user_id', '=', $userId)
			->where('article_id', '=', $articleId)
			->get();
		return $like;
	}
	
    public function posts()
	{
		$postsByPage = 5;
		$articles = Article::orderBy('created_at', 'desc')->paginate($postsByPage);	
		return view('posts', compact('articles'));
	}
    public function post($id)
	{
		$article = Article::find($id);
		$likes = \DB::table('likes')
			->where('article_id', '=', $id)
			->get();
		$likesCount = $likes->count();
		
		if(auth()->check()) {
			$userId = auth()->user()->id;
			$like = $this->getLike($userId, $id);
			$likeValue = 'like';
			if($like->isEmpty()) { 
				$likeValue = '';
			}
			return view('post', compact('article', 'userId', 'likeValue', 'likesCount'));
		}
		$likeValue = '';
		$userId = false;
		
		return view('post', compact('article', 'userId', 'likeValue', 'likesCount'));
	}
	public function newpost()
	{
		return view('newpost');
	}
	
	public function categoryPosts($category)
	{
		$postsByPage = 5;
		$articles = Article::orderBy('created_at', 'desc')
		->where('category', '=', $category)
		->paginate($postsByPage);
		
		return view('posts', compact('articles'));
	}
	public function archivePosts($month)
	{
	//	$postsByPage = 5;
	//	$articles = Article::orderBy('created_at', 'desc')
	//	->where('category', '=', $category)
	//	->paginate($postsByPage);
		
	//	return view('posts', compact('articles'));
	}

	public function addpost(Request $req)
	{
		$validation = $req->validate([
			'title' => 'required|max:50',
			'article' => 'required|min:5|max:5000',
			'imgLoad' => 'max:20480|image',
		]);

		$file = $req->file('imgLoad');
		$req->imgLoad->store('public/images');
		$imgName = $req->imgLoad->hashName();

		$img = Image::make($file)
			->resize(600, null, function ($constraint) {
				$constraint->aspectRatio();
			})
			->save("images/small/{$imgName}");

		$article = new Article();
		$article->title = $req->input('title');
		$article->category = $req->input('category');
		$article->body = $req->input('article');
		$article->picture = $imgName ;
		$article->picture_title = $req->input('img-title');
		$article->user_id = auth()->user()->id;
		$article->save();

		return redirect('/posts');
	}
	public function changeLike(Request $req) 
	{
		$article_id = $req->input('articleId');
		$user_id = $req->input('userId');
		$action = $req->input('action');
		
		$like = $this->getLike($user_id, $article_id);
		
		if($like->isEmpty()) {
			$setLike = new Like();
			$setLike->user_id = $user_id;
			$setLike->article_id = $article_id;
			$setLike->save();
		} else {
			\DB::table('likes')
            ->where('user_id', '=', $user_id)
			->where('article_id', '=', $article_id)
			->delete();
		}
		
		return response()->json(true);
	}
}
