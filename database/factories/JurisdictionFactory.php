<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jurisdiction>
 */
class JurisdictionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'responsible_department_name' => $this->faker->unique()->lexify('所管部署 ???'),
            'contact_department_name' => $this->faker->unique()->lexify('連絡先部署 ???'),
            'phone_number' => $this->faker->phoneNumber,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
