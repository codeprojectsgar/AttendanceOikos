<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Model\EBackg;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\E_backg>
 */
class EBackgFactory extends Factory
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

            //Mother
            'm_fname'=>"mother firstname",
            'm_lname'=>"mother lastname",
            'm_minitial'=>"mother middleinitial",
            'm_extension'=>"mother numbername",
            'm_bday'=>"01/24/1990",
            'm_phone_number'=>"0988645452",
            'm_address'=>"motheraddress",
            'm_city'=>"Mothers city",
            'm_region'=>"mother region",
            'm_postal_code'=>80085,
            'm_country'=>"Cambodia",
            'm_nationality'=>"Filipino",
            //Father

            'f_fname'=>"Fatherfirstname",
            'f_lname'=>"Fatherlastname",
            'f_minitial'=>"Fathermiddleinitial",
            'f_extension'=>"Father name extension",
            'f_bday'=>"06/05/1980",
            'f_phone_number'=>"085544321",
            'f_address'=>"24#nowhere.com",
            'f_city'=>"metro manila",
            'f_region'=>"NCR",
            'f_postal_code'=>8008135,
            'f_country'=>"Pampanga",
            'f_nationality'=>"americano",

            //Spouse Details
            'spouse_lname'=>"Celeste",
            'spouse_fname'=>"Mary",
            'spouse_minitial'=>"demi",
            'spouse_extension'=>"3rd",
            'spouse_occupation'=>"Doctor",
            'spouse_employer'=>"duane",
            'spouse_business_address'=>"anakbayan",
            'spouse_telephone_number'=>"02132154",
        ];
    }
}
