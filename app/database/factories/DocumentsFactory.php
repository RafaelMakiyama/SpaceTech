<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'size' => $this->faker->numberBetween(1, 20000),
            'number_signature'=> $this->faker->numberBetween(1,500),
            'responsable_signature' => $this->faker->name(),
            'pages_quanties'=> $this->faker->numberBetween(1,10),
        ];
    }
}
