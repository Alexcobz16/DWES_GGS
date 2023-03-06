<?php

namespace Database\Factories;
use App\Models\Datos;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Datos>
 */
class DatosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Datos::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->sentence(),
            'apellidos' => $this->faker->sentence(),
            'descripcion' => $this->faker->paragraph(),
            'id_creador' => 1
        ];
    }
}
