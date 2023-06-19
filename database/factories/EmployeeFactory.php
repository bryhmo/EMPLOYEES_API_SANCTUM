<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employee;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'phone'=>fake()->phoneNumber,
            'address'=>fake()->address,
            'photo'=>fake()->imageUrl('60','60'),
            'role'=>fake()->randomElement(['operational staff','waiter','coordinator','intern','customer service']),
            'status'=>fake()->randomElement(['Excellent','Very Good','Good','Average','Fair']),
        ];
    }
}
