<?php

declare(strict_types=1);

namespace App\Http\Controllers\Batch;

use App\Http\Controllers\Controller;
use App\Models\Batch;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

final class BatchDeleteController extends Controller
{
    public function delete(int $id): RedirectResponse
    {
        Batch::destroy($id);

        return redirect()->route('batches.index');
    }
}
