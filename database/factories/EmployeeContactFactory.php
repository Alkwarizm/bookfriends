<?php

namespace Database\Factories;

use App\Models\EmployeeContact;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class EmployeeContactFactory extends Factory
{
    protected $model = EmployeeContact::class;

    public function definition(): array
    {
        return [
            'employee_uuid' => $this->faker->uuid(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
