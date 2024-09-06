<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name() ,
            'lastname' => $this->faker->lastname() ,
            'ci' => $this->faker->randomNumber(8, true),
            'email' => $this->faker->email(),
            'address' => $this->faker->address(),
            'department_id' => $this->faker->numberBetween(1, 50),
        ];
    }
}
