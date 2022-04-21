<?php

declare(strict_types=1);

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

final class ArticleCreateController extends Controller
{
    public function create(): Factory|View|Application
    {
        return view('articles.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'article_code' => 'required',
        ]);

        $article = Article::create($data);

        return redirect()->route('article.update', $article->id);
    }
}
