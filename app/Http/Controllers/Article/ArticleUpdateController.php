<?php

declare(strict_types=1);

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

final class ArticleUpdateController extends Controller
{
    public function update(Article $article): Factory|View|Application
    {
        return view('articles.update', compact('article'));
    }

    public function store(Request $request, Article $article)
    {
        $data = $request->validate([
            'article_code' => 'required',
        ]);

        $article->update($data);

        return redirect()->route('article.update', $article->id);
    }
}
