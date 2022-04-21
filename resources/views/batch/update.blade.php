@extends('layouts.master')

@section('content')
    <div class="w-4/5 m-auto">
        <h1 class="mb-4">Batch {{ $batch->batch_code }} updaten</h1>
        <form action="{{ route('batches.update.store', $batch->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="article_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Selecteer artikel</label>
                <select id="article_id" name="article_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @foreach($articles as $article)
                        <option value="{{ $article->id }}" @if($article->id === $batch->article_id) selected @endif>
                            {{ $article->article_code }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-6">
                <label for="batch_code" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Batch code</label>
                <input type="text" id="batch_code" name="batch_code" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $batch->batch_code }}" required="">
            </div>
            <div class="mb-6">
                <label for="amount" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Aantal</label>
                <input type="number" id="amount" name="amount" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $batch->amount }}" required="">
            </div>
            <button type="submit" class="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Aanmaken</button>
        </form>
    </div>
@stop
