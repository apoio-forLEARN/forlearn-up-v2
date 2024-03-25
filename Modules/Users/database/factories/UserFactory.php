<?php

namespace Modules\Users\atabase\factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     */
    protected $model = \Modules\Users\app\Models\User::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [];
    }
}

