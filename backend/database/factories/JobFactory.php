<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->description(),
            'permanent' => $this->faker->permanent(),
            'remote' => $this->faker->remote(),
            'wage' => $this->faker->wage(),
            'wage_period' => $this->faker->wage_period(),
            'negotiable' => $this->faker->negotiable(),
            'city' => $this->faker->city(),
            'days' => $this->faker->days(),
            'category_id' => $this->faker->category_id(),
            'user_id' => $this->faker->user_id(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
