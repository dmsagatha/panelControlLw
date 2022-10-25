<?php

namespace Database\Factories;

use App\User;
use App\UserProfile;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
  protected $model = User::class;

  public function configure()
  {
    // Después que se cree el Usuario, se ejecute la función anónima
    // para crear un Perfil
    return $this->afterCreating(function ($user) {
      // Obtener el objeto con el Perfil, luego guardarlo asociado
      // al Usuario a través de la asociación profile()
      $user->profile()->save(UserProfile::factory()->make());
      // $user->profile()->save(UserProfile::class)->factory()->make();
    });
  }

  public function definition()
  {
    return [
      'name'     => $this->faker->name(),
      'email'    => $this->faker->unique()->safeEmail(),
      'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
      // 'password' => $password ?: $password = bcrypt('secret'),
      'role'     => $this->faker->randomElement(['user', 'admin']),
      'active'   => true,
      'remember_token' => Str::random(10),
    ];
  }

  /**
   *  2-34 Usar campos y atributos diferentes a los de la base de datos
   *  Definir un state para estado inactivo del campo active
   */
  public function inactive()
  {
    return $this->state(function () {
      return [
        'active' => false,
      ];
    });
  }
}