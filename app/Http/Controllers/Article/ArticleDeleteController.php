<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

final class ArticleDeleteController extends Controller
{
    public function delete(int $id): RedirectResponse
    {
        Article::destroy($id);

        return redirect()->route('articles.index');
    }
}
