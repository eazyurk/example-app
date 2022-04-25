<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

final class Batch extends Model
{
    use HasFactory;

    protected $fillable = [
        'article_id',
        'batch_code',
        'amount',
    ];

    public static function getBatchByArticleAndAmount(int $articleId, int $amount): Collection|array
    {
        return self::query()
            ->where('article_id', $articleId)
            ->where('amount', $amount)
            ->get();
    }

    public static function getAllBatchesForArticle(int $articleId, int $amount): Collection|array
    {
        return self::query()
            ->where('article_id', $articleId)
            ->where('amount', '>=', $amount)
            ->orderBy('amount', 'DESC')
            ->get();
    }

    public function article(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Article::class);
    }
}
