<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\Category::class;

    public function definition(): array
    {
        return [
            //
            "name" => $this->faker->name,
            "parent_id" => $this->faker->randomNumber(),
            "path" => $this->faker->imageUrl(),
        ];
    }
}
