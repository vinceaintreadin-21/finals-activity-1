<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'bio' =>fake()->paragraph(),
            'school'=> fake()-> name(),
            'address'=> fake()-> address(),
            'birthdate' =>fake()-> date(),
            'contact_number'=> fake()-> phoneNumber(),
        ];
    }
}
