<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'employee_name'=>$this->faker->name(15),
        'email'=>$this->faker->email,
        'phone_number'=>$this->faker->phoneNumber(10),
        'department'=>$this->faker->text(9),
        'employee_role'=>$this->faker->text(9),
        'employee_id'=>$this->faker->randomDigit(10),
       // 'image'=>$this->faker->imageUrl($width=200,$height=200)
        ];
    }
}
