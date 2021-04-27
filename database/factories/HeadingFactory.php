<?php

namespace Database\Factories;

use App\Models\Heading;
use Illuminate\Database\Eloquent\Factories\Factory;

class HeadingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Heading::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->randomElement(['Automotor', 'Inmobiliario', 'Transportista', 'Maritimo', 'Fiscal', 'Naval', 'Aereo']),
            'descripcion' => $this->faker->text(),
            'codigo' => $this->faker->numerify('######'),
        ];
    }
}
