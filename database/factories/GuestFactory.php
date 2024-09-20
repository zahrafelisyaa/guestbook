<?php

namespace Database\Factories;

use App\Models\Guest;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guest>
 */
class GuestFactory extends Factory
{
    protected $model = Guest::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $dataTime = $this->faker->dateTimeBetween('1 month ago', 'now');
        return [
            'fullname' => $this->faker->name(),
            'institution_id' => $this->faker->numberBetween(1, 3),
            'from' => $this->faker->randomElement([
                'Dinas',
                'Sekolah',
                'Perusahaan'
            ]),
            'phonenumber' => '+62' . $this->faker->numerify('##########'),
            'email' => $this->faker->unique()->safeEmail(),
            'note' => $this->faker->sentence(),
            'created_at' => $dataTime,
            'updated_at' => $dataTime,

        ];
    }
}
