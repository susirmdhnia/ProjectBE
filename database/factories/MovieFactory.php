<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->text(), 
            'releaseDate'=> $this->faker->date(), 
            'runningTime'=> $this->faker->text(), 
            'director'=> $this->faker->text(), 
            'producer'=> $this->faker->text(), 
            'actor'=> $this->faker->text(), 
            'image', 
            'genreId' => $this->faker->numberBetween(1, 4)
        ];
    }
}
