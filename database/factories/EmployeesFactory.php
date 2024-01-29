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
            'email'=>'miguel@yahoo.com',
            'password'=>bcrypt('1234'),
            'name'=>'Miguel Alvarez',
            'role'=>1,
            'status'=>'inactive'
        ];
    }
}
