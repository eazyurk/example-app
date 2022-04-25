<?php

use App\Http\Controllers\Article\ArticleCreateController;
use App\Http\Controllers\Article\ArticleDeleteController;
use App\Http\Controllers\Article\ArticleIndexController;
use App\Http\Controllers\Article\ArticleUpdateController;
use App\Http\Controllers\Batch\BatchCreateController;
use App\Http\Controllers\Batch\BatchDeleteController;
use App\Http\Controllers\Batch\BatchIndexController;
use App\Http\Controllers\Batch\BatchUpdateController;
use App\Http\Controllers\Finder\FinderIndexController;
use App\Http\Controllers\Finder\FinderSearchController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Article routes
Route::get('articles', [ArticleIndexController::class, '__invoke'])->name('articles.index');

Route::get('articles/create', [ArticleCreateController::class, 'create'])->name('articles.create');
Route::post('articles/create', [ArticleCreateController::class, 'store'])->name('articles.create.store');

Route::get('articles/{article}/update', [ArticleUpdateController::class, 'update'])->name('article.update');
Route::post('articles/{article}/update', [ArticleUpdateController::class, 'store'])->name('article.update.store');

Route::delete('articles/{article}/delete', [ArticleDeleteController::class, 'delete'])->name('article.delete');

//Batch routes
Route::get('batches', [BatchIndexController::class, '__invoke'])->name('batches.index');

Route::get('batches/create', [BatchCreateController::class, 'create'])->name('batches.create');
Route::post('batches/create', [BatchCreateController::class, 'store'])->name('batches.create.store');

Route::get('batches/{batch}/update', [BatchUpdateController::class, 'update'])->name('batches.update');
Route::post('batches/{batch}/update', [BatchUpdateController::class, 'store'])->name('batches.update.store');

Route::delete('batches/{batch}/delete', [BatchDeleteController::class, 'delete'])->name('batches.delete');

//Finder routes
Route::get('finder', [FinderIndexController::class, '__invoke']);

Route::get('finder/search', [FinderSearchController::class, 'search']);
Route::post('finder/search', [FinderSearchController::class, 'store'])->name('finder.search.store');

Route::get('/', function () {
    return view('welcome');
});
