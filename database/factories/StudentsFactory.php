<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Students>
 */
class StudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

                'student_id'=> "202000000",
                'email' => "email@email.com",
                'password'=> bcrypt("1234"),
                'fname' => "first name",
                'lname' => "last name",
                'minital'=> "middle initial",
                'nextention'=> "number name",
                'fetcher'=> "Service/fetch/commute",
                'level'=> 1,
                'section'=> "Dandelion",
                'enroll_status' => "enrolled",
                'bday' => "08/20/2001",
                'address'=> "56st yemen st yemen",
                'city'=> "caloocan",
                'region'=> "NCR",
                'postal_code'=> 123,
                'country'=>"home country",
                'nationality'=> "philippinease",
                'sex'=> "Boy or Girl",
                'telephone_number'=> "N/A",
                'mobile_number'=> "N/A",
            
        ];
    }
}
