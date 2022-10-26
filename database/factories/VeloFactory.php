<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VeloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'marque' => $this->faker->company,
            'model' => $this->faker->year,
            'type' => $this->faker->word,
            'prixJ' => $this->faker->randomNumber(),
            'dispo' => $this->faker->randomDigit(0, 1),
        ];
    }
}