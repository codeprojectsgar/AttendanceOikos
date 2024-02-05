<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Model\EEducation;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\E_education>
 */
class EEducationFactory extends Factory
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

            //Gradeschool
            'gs_school'=>"gradeschool name",
            'gs_address'=>"gradeschool address",
            'gs_year'=>"gradeschool year",
            'gs_contact_person'=>"gradeschool contact",
            'gs_phone_number'=>"gradeschool number",
            //Highschool
            'hs_school'=>"highschool name",
            'hs_address'=>"highschool address",
            'hs_year'=>"highschool year",
            'hs_contact_person'=>"highschool contact",
            'hs_phone_number'=>"highschool number",
            //College
            'c_school'=>"college name",
            'c_address'=>"college address",
            'c_year'=>"college year",
            'c_contact_person'=>"college contact",
            'c_phone_number'=>"college number",
        ];
    }
}
