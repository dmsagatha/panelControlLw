<?php

namespace Database\Factories;

use App\Models\Profession;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfessionFactory extends Factory
{
  protected $model = Profession::class;

  public function definition()
  {
    return [
      'title' => $this->faker->unique()->sentence(2, false),
    ];
  }
}