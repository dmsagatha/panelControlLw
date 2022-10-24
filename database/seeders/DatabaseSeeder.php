<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
  public function run()
  {
    // \App\User::factory(10)->create();
    
    $this->truncateTables([
      'users',
      'user_profiles',
      'user_skill',
      'skills',
      'professions',
      'teams',
    ]);

    $this->call([
      ProfessionSeeder::class,
      SkillSeeder::class,
      TeamSeeder::class,
      UserSeeder::class,
    ]);
  }

  protected function truncateTables(array $tables)
  {
    DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

    foreach ($tables as $table)
    {
      DB::table($table)->truncate();
    }

    DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
  }
}