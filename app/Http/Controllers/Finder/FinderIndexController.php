<?php

declare(strict_types=1);

namespace App\Http\Controllers\Finder;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

final class FinderIndexController extends Controller
{
    public function __invoke(): Factory|View|Application
    {
        $articles = Article::all();

        return view('finder.index', compact('articles'));
    }
}
