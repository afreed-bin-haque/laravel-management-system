<?php

namespace Database\Factories;

use App\Models\Admin;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdminFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Admin::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Muhammad Main Uddin Hasan',
            'email' => 'mainadmin@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$zOfJ0Y05D7atYFlfnqT78.6XV28mkiKEg7adgW8VzznLOFrCHhrdC', // admin12345678
            'remember_token' => Str::random(10),
        ];
    }
}
