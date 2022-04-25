<div class="w-4/5 m-auto">
    <h1 class="mb-4">Batch zoeken</h1>
    <form wire:submit.prevent="submit" method="POST" enctype="multipart/form-data">
        @csrf
        @for ($i = 0; $i <= 2; $i++)
            <div class="mb-6 flex">
                <div class="flex-1">
                    <label for="search[{{ $i }}][article]" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Selecteer artikel</label>
                    <select id="search[{{ $i }}][article]" wire:model="search.{{ $i }}.article" name="search[{{ $i }}][article]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="">-</option>
                        @foreach($articles as $article)
                            <option value="{{ $article->id }}">{{ $article->article_code }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex-1 ml-4">
                    <label for="search[{{ $i }}][amount]" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Aantal</label>
                    <input type="number" id="search[{{ $i }}][amount]" wire:model="search.{{ $i }}.amount" name="search[{{ $i }}][amount]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Aantal">
                </div>
            </div>
        @endfor
        <button type="submit" class="text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Aanmaken</button>
    </form>
    <div>
        @if($searchResult)
            @foreach($searchResult as $result)
                Best batch is: <br>
                {{ $result['batch']['batch']->batch_code }} <br>
                {{ $result['batch']['batch']->amount }} <br>
                {{ $result['reason'] }} <br>
                <hr>
            @endforeach
        @endif
    </div>
</div>
