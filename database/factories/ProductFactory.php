<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(15),
            'price' => $this->faker->numerify('##.#'),
            'description' => $this->faker->text,
            'weight' => $this->faker->numerify('##.#'),
            'stock' => $this->faker->numerify('###')
        ];
    }
}
