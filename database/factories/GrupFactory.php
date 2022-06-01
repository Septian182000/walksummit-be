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
            'jalur_id' => $this->faker->numberBetween(1, 5),
            'status' => $this->faker->boolean,
            'tgl_brangkat' => $this->faker->date,
            'tgl_pulang' => $this->faker->date,
        ];
    }
}
