<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class Search extends Component
{
    public $search;

    protected $rules = [
        'search' => 'required'
    ];

    public function submit()
    {
        $this->validate();
        dd($this->search);
    }

    public function render()
    {
        $articles = Article::all();

        return view('livewire.search', compact('articles'));
    }
}
