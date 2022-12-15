<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Crime>
 */
class CrimeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'description'=> $this->faker->paragraph(),
            'location_id'=>$this->faker->numberBetween(1, 5),
            'user_id' => $this->faker->numberBetween(1, 10),
            'type' =>'murder',
            'status'=>'pending'
        ];
    }
}
