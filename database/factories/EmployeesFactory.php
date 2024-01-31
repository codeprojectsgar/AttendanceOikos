<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employees>
 */
use \App\Models\Employees;
class EmployeesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'email'=>fake()->email(),
            'password'=>bcrypt('1234'),
            'name'=>fake()->name(),
            'role'=>mt_rand(1,3),
            'status'=>'inactive'
        ];
    }
}
