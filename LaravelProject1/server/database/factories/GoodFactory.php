<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class GoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'good_id' => $this->faker->word(10),
            'description' => $this->faker->text(30),
            'qty' => $this->faker->numberBetween(0,300),
            'price' => $this->faker->randomFloat(2,0,1)
            
        ];
    }
}
