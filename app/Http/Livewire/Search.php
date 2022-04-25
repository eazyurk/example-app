<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use App\Models\Article;
use App\Models\Batch;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

final class Search extends Component
{
    public ?array $search = null;

    public ?array $searchResult = null;

    protected $rules = [
        'search.*.article' => 'string',
        'search.*.amount' => 'integer',
    ];

    public function submit()
    {
        $this->validate();

        foreach ($this->search as $key => $search) {
            //Find where batch is fully used (so where amount of batch is the same as amount submitted)
            $fullyUsedBatch = DB::table('batches')
                ->where('article_id', $search['article'])
                ->where('amount', $search['amount'])
                ->get();

            if (!$fullyUsedBatch->isEmpty()) {
                $batch = $fullyUsedBatch->first();

                $this->searchResult[$key] = [
                    'batch' => compact('batch'),
                    'reason' => 'Fully used up',
                ];
                continue;
            }

            $allBatches = DB::table('batches')
                ->where('article_id', $search['article'])
                ->orderBy('amount', 'DESC')
                ->get();

            //Find batch where less than 5% is remaining
            if (!isset($this->searchResult[$key])) {
                foreach ($allBatches as $batch) {
                    //First calculate remainder
                    $remainder = $batch->amount - $search['amount'];
                    //Calculate percentage left
                    $percentageRemaining = ($remainder / $batch->amount) * 100;

                    //If percentage is less than 5 percent and remainder is not negative take that batch
                    if ($percentageRemaining <= 5 && $remainder > 0) {
                        $this->searchResult[$key] = [
                            'batch' => compact('batch'),
                            'reason' => 'Less than 5% percent remaining',
                        ];
                    }
                }
            }

            //To get the batch where most is remaining we take the batch with the highest amount
            if (!isset($this->searchResult[$key])) {
                $batch = $allBatches->first();
                $this->searchResult[$key] = [
                    'batch' => compact('batch'),
                    'reason' => 'Most remaining',
                ];
            }
        }
    }

    public function render()
    {
        $articles = Article::all();

        return view('livewire.search', compact('articles'));
    }
}
