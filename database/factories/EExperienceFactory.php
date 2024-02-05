<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Model\EExperience;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\E_experience>
 */
class EExperienceFactory extends Factory
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
            'employee_id'=>"202010000",

            //1st
            'company' =>"neda",
            'company_address'=>"address",
            'company_jobtitle_position'=>"comp postion",
            'company_contact'=>"alejandro",
            'company_job_description'=>"neda",
            'company_duration'=>"10years",
            'company_phone_number'=>"111111",
            //2nd
            'company2' =>"neda2",
            'company2_address'=>"address2",
            'company2_jobtitle_position'=>"comp postion2",
            'company2_contact'=>"alejandro2",
            'company2_job_description'=>"tech company",
            'company2_duration'=>"20years",
            'company2_phone_number'=>"22222",
            //3rd
            'company3' =>"neda3",
            'company3_address'=>"address3",
            'company3_jobtitle_position'=>"comp postion3",
            'company3_contact'=>"alejandro3",
            'company3_job_description'=>"Firm agency",
            'company3_duration'=>"30years",
            'company3_phone_number'=>"33333",

        ];
    }
}
