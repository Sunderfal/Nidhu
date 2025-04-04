<?php

namespace Database\Factories;

use App\Models\Gasto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Gasto>
 */
class GastoFactory extends Factory {

    protected $model = Gasto::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {

        $cantidadEntera = fake()->numberBetween(1, 50);
        $cantidadDecimal = fake()->randomFloat(2, 1, 50);

        return [    
            "descripcion" => fake()->text(),
            "cantidad" => fake()->randomElement([$cantidadEntera, $cantidadDecimal]),
            "idUsuario" => fake()->unique()->numberBetween(3, 22)
        ];
    
    }

}