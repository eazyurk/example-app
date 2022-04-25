<div class="w-4/5 m-auto">
    <h1 class="mb-4">Batch zoeken</h1>
    <form wire:submit.prevent="submit" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-6 flex">
            <div class="flex-1">
                <label for="search[0][article]" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Selecteer artikel</label>
                <select id="search[0][article]" name="search[0][article]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @foreach($articles as $article)
                        <option value="{{ $article->id }}">{{ $article->article_code }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex-1 ml-4">
                <label for="search[0][amount]" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Aantal</label>
                <input type="number" id="search[0][amount]" name="search[0][amount]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Aantal" required="">
            </div>
        </div>
        <div class="mb-6 flex">
            <div class="flex-1">
                <label for="search[1][article]" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Selecteer artikel</label>
                <select id="search[1][article]" name="search[1][article]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @foreach($articles as $article)
                        <option value="{{ $article->id }}">{{ $article->article_code }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex-1 ml-4">
                <label for="search[1][amount]" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Aantal</label>
                <input type="number" id="search[1][amount]" name="search[1][amount]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Aantal" required="">
            </div>
        </div>
        <div class="mb-6 flex">
            <div class="flex-1">
                <label for="search[2][article]" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Selecteer artikel</label>
                <select id="search[2][article]" name="search[2][article]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @foreach($articles as $article)
                        <option value="{{ $article->id }}">{{ $article->article_code }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex-1 ml-4">
                <label for="search[2][amount]" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Aantal</label>
                <input type="number" id="search[2][amount]" name="search[2][amount]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Aantal" required="">
            </div>
        </div>
        <button type="submit" class="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Aanmaken</button>
    </form>
</div>
