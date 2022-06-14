<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InviteeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'email'=>$this->faker->email,
            'mobile_number'=>$this->faker->phoneNumber,
            'host'=>$this->faker->name,
            'purpose'=>$this->faker->paragraph(20),
            'invite_date'=>$this->faker->dateTimeBetween('-1 week','+1 week'),
            'invite_time'=>$this->faker->date('H:i:s', rand(1,54000))
        ];
    }
}
