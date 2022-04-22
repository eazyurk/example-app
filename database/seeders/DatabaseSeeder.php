<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Batch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $articles = Article::factory(20)->create();

        $articles->each(function ($article) {
            $article->batches()->saveMany(
                Batch::factory(5)->make()
            );
        });
    }
}
