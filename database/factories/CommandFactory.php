<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Velo;

class CommandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::pluck('id')->random(),
            'car_id' => Velo::pluck('id')->random(),
            'dateL' => $this->faker->dateTime(),
            'dateR' => $this->faker->dateTime(),
            'prixTTC' => $this->faker->randomDigit(1000, 5000)

        ];
    }
}