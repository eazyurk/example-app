<?php

declare(strict_types=1);

namespace App\Http\Controllers\Finder;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

final class FinderSearchController extends Controller
{
    public function search(): Factory|View|Application
    {
        return view('finder.search');
    }

    public function store(Request $request)
    {
        dd($request->post()['search']);
    }
}
