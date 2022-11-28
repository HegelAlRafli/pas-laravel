<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Destinasi>
 */
class DestinasiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_destinasi' => fake()->words(2, true),
            'lokasi' => fake()->city(),
            'deskripsi' => fake()->paragraph(),
            'jml_view' => fake()->randomNumber(5, true),
            'estimasi_harga' => fake()->randomNumber(8, true),
        ];
    }
}
