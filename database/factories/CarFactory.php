<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Car;

class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'brand' => $this->faker->name,
            'model' => $this->faker->name,
            'year' => $this->faker->year($max = 'now'),
            'maxSpeed' => $this->faker->unique()->randomDigit,
            'isAutomatic' => $this->faker->boolean,
            'engine' => $this->faker->name,
            'numberOfDoors' => $this->faker->randomDigit

        ];
    }
}
