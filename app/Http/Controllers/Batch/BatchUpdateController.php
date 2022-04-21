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

final class BatchUpdateController extends Controller
{
    public function update(Batch $batch): Factory|View|Application
    {
        $articles = Article::all();

        return view('batch.update', compact('articles'), compact('batch'));
    }

    public function store(Request $request, Batch $batch): RedirectResponse
    {
        $data = $request->validate([
            'article_id' => 'required',
            'batch_code' => 'required',
            'amount' => 'required',
        ]);

        $batch->update($data);

        return redirect()->route('batches.update', $batch->id);
    }
}
