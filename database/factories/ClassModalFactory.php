<?php

namespace Database\Factories;

use App\Models\ClassModal;
use App\Models\School;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ClassModalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = ClassModal::class;
    public function definition(): array
    {
        return [
            'class_name' => $this->faker->numberBetween(1,2),
            'school_id' => School::factory(),
        ];
    }
}
