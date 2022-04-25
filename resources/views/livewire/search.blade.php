<div class="w-4/5 m-auto">
    <div class="mb-4 flex">
        <div>
            <h1 class="text-xl font-bold decoration-gray-400">Batch zoeken</h1>
        </div>
    </div>
    <form wire:submit.prevent="submit" class="border-black bg-gray-50 p-3 rounded pb-12" method="POST" enctype="multipart/form-data">
        @csrf
        @for ($i = 0; $i <= 2; $i++)
            <div class="mb-6 flex">
                <div class="flex-1">
                    <label for="search[{{ $i }}][article]" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Selecteer artikel</label>
                    <select id="search[{{ $i }}][article]" wire:model.defer="search.{{ $i }}.article" name="search[{{ $i }}][article]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="">-</option>
                        @foreach($articles as $article)
                            <option value="{{ $article->id }}">{{ $article->article_code }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex-1 ml-4">
                    <label for="search[{{ $i }}][amount]" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Aantal</label>
                    <input type="number" id="search[{{ $i }}][amount]" wire:model.defer="search.{{ $i }}.amount" name="search[{{ $i }}][amount]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Aantal">
                </div>
            </div>
        @endfor
        <button type="submit" class="float-right text-white bg-green-500 hover:bg-green-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Zoeken
        </button>
    </form>
    <div class="mt-5">
        @if($searchResult)
            <table class="min-w-full">
                <thead>
                    <tr>
                        <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Batch Code
                        </th>
                        <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Batch aantal
                        </th>
                        <th
                            class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                            Reden
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach($searchResult as $result)
                        <tr wire:key="{{ $loop->index }}">
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-900" wire:key="{{ $loop->index }}">
                                    {{ !empty($result['batch']['batch']->batch_code) ? $result['batch']['batch']->batch_code : '' }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-900" wire:key="{{ $loop->index }}">
                                    {{ !empty($result['batch']['batch']->amount) ? $result['batch']['batch']->amount : '' }}
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                <div class="text-sm leading-5 text-gray-900" wire:key="{{ $loop->index }}">
                                    {{ $result['reason'] }}
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>
