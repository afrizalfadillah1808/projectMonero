<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
          'category_id' => $this->faker->numberBetween(1, 5),
          'mentor_id' => $this->faker->numberBetween(1, 3),
          'namaCourse' => $this->faker->word(2),
          'slugCourse' => $this->faker->slug(3),
          'lamaVideo' => $this->faker->numberBetween(11, 20) . ' Jam',
          'jumlahVideo' => $this->faker->numberBetween(80, 110) . ' Video',
          'hargaCourse' => 'Rp. ' . number_format($this->faker->numberBetween(600000, 999000), 0, ',', '.')
        ];
    }
}