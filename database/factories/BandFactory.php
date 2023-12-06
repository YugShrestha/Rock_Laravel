<?php

namespace Database\Factories;

use App\Models\Band;
use Illuminate\Database\Eloquent\Factories\Factory;

class BandFactory extends Factory
{
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'location' => $this->faker->city(),
            'tags' => 'Nirvana,foofighters', // You might want to adjust this dynamically
            'email' => $this->faker->email(),
            'album' => $this->faker->title(),
            'list' => $this->faker->words(5, true), // Example: generate a list of 5 words
            'description' => $this->faker->paragraph(5)
        ];
    }
}
