<?php

namespace Database\Factories;

use App\Models\Jurisdiction;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Facility>
 */
class FacilityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'jurisdiction_id' => Jurisdiction::factory(),
            'name' => $this->faker->unique()->lexify('設備 ???'),
            'kind' => $this->faker->randomElement(['lecture_room', 'meeting_room', 'ground', 'court', 'other']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
