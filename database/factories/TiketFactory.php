<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tiket>
 */
class TiketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_destinasi' => mt_rand(1, 10),
            'tujuan' => fake()->words(2, true),
            'dipesan' => fake()->dateTime(),
            'tanggal_wisata' => fake()->dateTime(),
            'metode_bayar' => fake()->randomElement(['Cash', 'Transfer']),
            'harga' => fake()->randomNumber(8, true),
        ];
    }
}
