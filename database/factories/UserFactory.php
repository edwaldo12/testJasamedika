<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            [
                'username' => 'Admin',
                'email' => 'Admin@gmail.com',
                'phone' => '0855667712', // password
                'password' => bcrypt('admin'),
                'role' => 'admin',
            ],
            [
                'username' => 'Operator',
                'email' => 'Operator@gmail.com',
                'phone' => '0855667712', // password
                'password' => bcrypt('operator'),
                'role' => 'operator',
            ],
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
