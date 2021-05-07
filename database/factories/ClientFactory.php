<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nom' => $this->faker->name(),
            'Prenom' => $this->faker->name(),
            'tel' => $this->faker->phoneNumber(),
            'mail' => $this->faker->unique()->safeEmail(),
            'adresse' => $this->faker->paragraph(),
            'photo' => $this->faker->paragraph(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ];
    }
}
