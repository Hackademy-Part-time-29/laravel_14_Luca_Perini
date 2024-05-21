<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreArticleRequest;

class ArticleController extends Controller
{
    public function ArticlesView(){
        $articles=Article::paginate(20);
        return view('articles', compact('articles'));
    }
    public function ArticleCreate(){
        $authors=Author::all();
        return view('add-article', compact('authors'));
    }

    public function store(StoreArticleRequest $request){

        $path=null;

        $article = Article::create([
            'title'=>$request->title,
            'body'=>$request->body,
            'author_id'=>$request->author_id,
        ]);

        if($request->hasFile('cover')){
            $article->cover=$request->file('cover')->storeAs('public/covers/'.$article->id,'cover.jpg');
            $article->save();
          }

        return redirect()->back()->with(['success'=>'Article created successfully!']);
    }

}
