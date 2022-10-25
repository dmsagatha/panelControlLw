<?php

namespace Database\Seeders;

use App\Team;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
  public function run()
  {
    Team::factory()->create(['name' => 'Styde']);

    Team::factory()->times(19)->create();

    /* DB::table('teams')->insert([
      ['name' => 'Styde']
    ]); */
  }
}
