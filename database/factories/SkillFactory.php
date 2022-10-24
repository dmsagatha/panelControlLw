<?php

namespace Database\Factories;

use App\Skill;
use Illuminate\Database\Eloquent\Factories\Factory;

class SkillFactory extends Factory
{
  protected $model = Skill::class;

  public function definition()
  {
    return [
      'name' => $this->faker->unique()->sentence(3),
    ];
  }
}