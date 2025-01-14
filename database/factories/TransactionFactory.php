<?php

namespace Database\Factories;

use App\Models\User;
use illuminate\Support\Str;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::class,
            'transaction_id' => str::random(8),
            'amount' => fake()->numberBetween(100, 1000),
            'type' => fake()->randomElement(['credit', 'debit']),

        ];
    }
}
