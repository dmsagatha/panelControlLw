<?php

namespace Database\Factories;

use App\Team;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeamFactory extends Factory
{
  protected $model = Team::class;

  public function definition()
  {
    return [
      'name' => $this->faker->unique()->company,
    ];
  }
}