<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Grub>
 */
class GrupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'status' => $this->faker->boolean,
            'tgl_brangkat' => $this->faker->date,
            'tgl_pulang' => $this->faker->date,
            'checkout' => $this->faker->boolean,
            'id_jalur' => $this->faker->numberBetween(1,10)
        ];
    }
}
