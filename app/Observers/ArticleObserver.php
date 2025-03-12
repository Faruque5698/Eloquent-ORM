<?php

namespace App\Observers;

use App\Models\Article;
use Illuminate\Support\Facades\Log;

class ArticleObserver
{
    /**
     * Handle the Article "created" event.
     */
    public function created(Article $article): void
    {
        $article->title = 'nahid'; //mutator for data in model
        Log::info('Article created');
    }

    /**
     * Handle the Article "updated" event.
     */
    public function updated(Article $article): void
    {
        Log::info('Article Updated');

    }

    /**
     * Handle the Article "deleted" event.
     */
    public function deleted(Article $article): void
    {
        //
    }

    /**
     * Handle the Article "restored" event.
     */
    public function restored(Article $article): void
    {
        //
    }

    /**
     * Handle the Article "force deleted" event.
     */
    public function forceDeleted(Article $article): void
    {
        //
    }
}
