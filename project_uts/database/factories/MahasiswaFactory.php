<?php

namespace Database\Factories;

use App\Models\Kota;
use App\Models\Kode;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function namaMahasiswa()
{
    $namaMahasiswa = [
        'Sigit Lengkuas',
        'Ambatron',
        'Rusdi Ngawi',
        'Roger Sumatra',
        'Sigit Rendang',
        'Reza Kecap',
        'Diddy',
        'Jongkler',
    ];

    return $this->faker->randomElement($namaMahasiswa);
}

public function definition(): array
{
    
    return [
        'nama' => fake()->name(),
        'kota_id' => Kota::factory(),
        'kode_id' => Kode::factory(),
        //
    ];
}

}
