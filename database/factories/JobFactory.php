<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle(),
            'description' => $this->faker->text(),
            'location' => $this->faker->randomElement(['remote', 'fullremote']),
            'salary' => $this->faker->randomElement(['50,000', '75,000', '100,000']),
            'url' => $this->faker->url(),
            'employer_id' => Employer::factory(),
        ];
    }
}
