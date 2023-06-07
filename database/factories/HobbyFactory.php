<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employee;
use App\Models\Customer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hobby>
 */
class HobbyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement(['Reading Books', 'Watching TV', 'Dancing', 'Singing', 'Comics', 'Games', 'Playing']),
            'hobbiable_id' => $this->faker->numberBetween(1, 20),
            'hobbiable_type' => $this->faker->randomElement([Employee::class, Customer::class])
        ];
    }
}
