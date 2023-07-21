<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserInfo>
 */
class UserInfoFactory extends Factory
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
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'age' => $this->faker->numberBetween(18, 60),
            'user_id' => $this->faker->numberBetween(1, 50)
        ];
    }
}
