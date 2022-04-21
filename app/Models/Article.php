<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'article_code',
    ];

    public function batches(): HasMany
    {
        return $this->hasMany(Batch::class);
    }
}
