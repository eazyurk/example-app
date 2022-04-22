<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Batch>
 */
final class BatchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'batch_code' => Str::random(3) . '-' . $this->faker->countryCode() . '-' . rand(0, 3) . '-21.50.01.0' . rand(0, 5),
            'amount' => rand(0, 100000),
        ];
    }
}
