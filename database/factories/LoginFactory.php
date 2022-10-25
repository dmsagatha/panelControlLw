<?php

namespace Database\Factories;

use App\Login;
use Illuminate\Database\Eloquent\Factories\Factory;

class LoginFactory extends Factory
{
  protected $model = Login::class;

  public function definition()
  {
    return [
      'created_at' => $this->faker->dateTime('now', 'America/Bogota'),
    ];
  }
}