<?php

declare(strict_types=1);

namespace App\Http\Controllers\Batch;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Batch;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

final class BatchCreateController extends Controller
{
    public function create(): Factory|View|Application
    {
        $articles = Article::all();

        return view('batch.create', compact('articles'));
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'article_id' => 'required',
            'batch_code' => 'required',
            'amount' => 'required',
        ]);

        $batch = Batch::create($data);

        return redirect()->route('batches.update', $batch->id);
    }
}
