<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory {

    protected $model = Producto::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {

        $cantidad = fake()->numberBetween(1, 100);
        $unidades = fake()->randomElement(['g', 'u']);

        return [
            "nombre" => fake()->word(),
            "cantidad" => "{$cantidad} " . fake()->randomElement([$unidades]),
            "idPiso" => fake()->numberBetween(1, 10)
        ];
    
    }

}