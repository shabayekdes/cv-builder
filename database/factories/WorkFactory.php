<?php

namespace Database\Factories;

use App\Models\Work;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorkFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Work::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->jobTitle,
            'company_name' => $this->faker->company,
            'location' => $this->faker->address,
            'employment_type' => $this->faker->randomDigit,
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'is_current_position' => $this->faker->boolean(),
            'description' => $this->faker->sentence(),
            'candidate_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
