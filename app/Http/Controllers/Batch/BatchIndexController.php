<?php

declare(strict_types=1);

namespace App\Http\Controllers\Batch;

use App\Http\Controllers\Controller;
use App\Models\Batch;
use Illuminate\Http\Request;

final class BatchIndexController extends Controller
{
    public function __invoke()
    {
        $batches = Batch::latest()->paginate(100);

        return view('batch.index', compact('batches'));
    }
}
