@extends('layouts.master')

@section('content')
    <div class="w-4/5 m-auto">
        <h1 class="mb-4">Artikel aanmaken</h1>
        <form action="{{ route('articles.create.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="article_code" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Artikel code</label>
                <input type="text" id="article_code" name="article_code" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Artikel code" required="">
            </div>
            <button type="submit" class="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Aanmaken</button>
        </form>
    </div>
@stop
