<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Comment;

class CommentaireController extends Controller
{
    public function store(Request $request, $article)
    {
        // $comment = Comment::create(['article_id'=>$article , 'content'=> $request->input('comment')]);
        // $article = Article::find($article);
        // $article-> comments()->save($comment);

        // return redirect()->route('articles.show', ['article' => $article->id]);


        $comment = new Comment();
        $comment->content = $request->input('comment');

        $article = Article::find($article);
        $comment->article()->associate($article);

        $comment->save();

        return redirect()->route('articles.show', ['article' => $article->id]);
    }
}
