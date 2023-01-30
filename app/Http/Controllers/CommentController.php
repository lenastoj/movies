<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Movie;

class CommentController extends Controller
{
    public function store(Request $request) {
        $request->validate([
            'movie_id' => 'required|exists:movies,id',
            'content' => 'required|min:10|max:2000|string'
        ]);
    

    $comment = new Comment();  
    $comment->content = $request->content;  
    $movie = Movie::find($request->movie_id);
    $comment->movie()->associate($movie)->save();


    $comment->save();
    return redirect('movies/' . $comment->movie_id);
    }
}