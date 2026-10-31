<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = [
            'Fiksi',
            'Teknologi',
            'Sains',
            'Sejarah',
            'Komik & Novel Grafis',
            'Bisnis & Ekonomi',
            'Biografi',
        ];
        return [
            'category' => fake()->unique()->randomElement($categories)
        ];
    }
}
