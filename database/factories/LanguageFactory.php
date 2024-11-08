<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Language>
 */
class LanguageFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' =>fake()->word,
            'locale' => fake()->locale()
        ];
    }
}
