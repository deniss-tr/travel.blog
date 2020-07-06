<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
    public function addComment(Request $req)
    {
		$validation = $req->validate([
			'body' => 'required|max:50',
        ]);
        $input = $req->all();
        $input['user_id'] = auth()->user()->id;
    
        Comment::create($input);

        return back();
    }
}
