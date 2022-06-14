<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'department_name'=>$this->faker->name,
            'hod'=>$this->faker->name,
            'office_number'=>$this->faker->randomDigit,
            'assistant'=>$this->faker->name,
        ];
    }
}
