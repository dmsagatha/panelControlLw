<?php

namespace Database\Factories;

use App\UserProfile;
use App\Profession;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserProfileFactory extends Factory
{
  protected $model = UserProfile::class;

  public function definition()
  {
    $professions = Profession::pluck('id')->all();

    return [
      'bio' => $this->faker->paragraph,
      'profession_id' => $this->faker->randomElement($professions),
    ];
  }
}