<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

class BrandFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Brand::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->randomElement(['Ford', 'Renault', 'Peugeot', 'BMW', 'Audi', 'Citroen', 'Cherry']),
            'modelo' => $this->faker->numerify('201#'),
            'pais_origen' => $this->faker->country(),
            'proveedor' => $this->faker->name(),
        ];
    }
}
