<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->jobTitle(),
            'content' => $this->faker->realText(),
            'estimated_time' => (float)rand(0, 24),
            'due_date' => Carbon::today()->addDays(rand(1, 7))->format('Y-m-d'),
            'priority' => rand(0,2),
            'severity' => rand(0,2),
            'status' => rand(0,4),
            'done' => false
        ];
    }
}
