<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pelanggan>
 */
class PelangganFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_grup' => $this->faker->numberBetween(1, 10),
            'nik' => 1111111111111111,
            'nama' => $this->faker->name,
            'alamat' => $this->faker->address,
            'no_telp' => $this->faker->e164PhoneNumber,
            'no_telp_orgtua' => $this->faker->e164PhoneNumber,
            'jenis_kelamin' => 'L'
        ];
    }
}
