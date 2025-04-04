<?php

namespace Database\Factories;

use App\Models\Piso;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Piso>
 */
class PisoFactory extends Factory {

    protected $model = Piso::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {

        return [
            "nombre" => fake()->word(),
            "idPropietario" => fake()->unique()->numberBetween(3, 22)
        ];
    
    }

}