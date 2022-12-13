<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Product::class;
    public function definition()
    {
        return [
            'tipo'=> $this->faker->text(30),
            'codigo'=>$this->faker->numberBetween(1111,4444),
            'imagen'=>$this->faker->imageUrl(),
            'material'=> $this->faker->text(20),
            'medida'=> $this->faker->numberBetween(10,40),
        ];
    }
}
