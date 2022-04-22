<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
final class ArticleFactory extends Factory
{
    #[ArrayShape(['article_code' => "string"])]
    public function definition(): array
    {
        return [
            'article_code' => Str::upper(Str::random(3)) . '-' . $this->faker->countryCode() . '-' . rand(0, 5),
        ];
    }
}
