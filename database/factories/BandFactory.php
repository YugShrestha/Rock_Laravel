<?php

namespace Database\Factories;

use App\Models\Band;
use Illuminate\Database\Eloquent\Factories\Factory;

class BandFactory extends Factory
{
    public function definition()
    {
        return [
            'artist' => $this->faker->name(),
            'location' => $this->faker->city(),
            
            'email' => $this->faker->email(),
            'title' => $this->faker->title(),
            'list' => $this->faker->word(13, true), // Example: generate a list of 5 words
            'description' => $this->faker->paragraph(7)
        ];
    }
}
