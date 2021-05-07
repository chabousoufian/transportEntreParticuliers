<?php

namespace Database\Factories;

use App\Models\Chauffeur;
use Illuminate\Database\Eloquent\Factories\Factory;

class ChauffeurFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Chauffeur::class;

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
            'nombre_voyage' => $this->faker->numberBetween(0,100),
            'bio' => $this->faker->paragraph(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            
        ];
    }
}
