<?php

namespace Modules\Cms\database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LanguageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = \Modules\Cms\Models\Language::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [];
    }
}

