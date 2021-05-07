<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'price' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 100000),
            'category_id' => 1,
            'quantity' => $this->faker->randomNumber(),
            'description' => $this->faker->text(),
            'image' => $this->faker->imageUrl($width = 640, $height = 480),
        ];
    }
}
