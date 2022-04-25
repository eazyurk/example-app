@extends('layouts.master')

@section('content')
    <div class="w-4/5 m-auto">
        <div class="mb-4 flex">
            <div>
                <h1 class="text-xl font-bold decoration-gray-400">Artikel aanmaken</h1>
            </div>
            <div class="flex-1">
                <a href="{{ route('articles.index') }}"
                   class="float-right text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2">
                    Terug naar overzicht
                </a>
            </div>
        </div>
        <form action="{{ route('articles.create.store') }}" class="border-black bg-gray-50 p-3 rounded pb-12" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label for="article_code" class="block mb-2 text-sm font-medium text-gray-900">Artikel code</label>
                <input type="text" id="article_code" name="article_code" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Artikel code" required="">
            </div>
            <button type="submit" class="float-right text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Aanmaken</button>
        </form>
    </div>
@stop
