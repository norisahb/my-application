<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inventory>
 */
class VehicleFactory extends Factory
{

    protected $model= \App\Models\Vehicle::class;



    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'name' => $this->faker->word(),
            'color' => $this->faker->safeColorName(),
            'plat_no' => $this->faker->numberBetween(1, 100),
            'user_id' => \App\Models\User::factory(),

        ];
    }


}
