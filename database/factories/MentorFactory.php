<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mentor>
 */
class MentorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'namaMentor' => $this->faker->name(),
            'emailMentor' => $this->faker->unique()->safeEmail(),
            'passwordMentor' => bcrypt('password'),
            'deskripsiMentor' => $this->faker->text(200)
        ];
    }
}
