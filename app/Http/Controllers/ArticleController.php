<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Hunter;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        $article = Article::where('title','Best Article')->first();
//        if (!$article) {
            $article = Article::create([
                "title" => "Best Article",
                "content" => "test article"
            ]);
//        }

//        $article = Article::firstOrCreate(['title'=>'Best Article'],['content' => 'pppp']); // if not exists then create
//        $article = Article::firstOrNew(['title'=>'Best Article'],['content' => 'pppp']); // if exists then return object for new article
//        $article->content = 'updated content';
//        $article->save();
//        $article = Article::updateOrCreate(['title'=>'Best Article'],['content' => 'pppp']); // if exists then update or create
        return $article;

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
