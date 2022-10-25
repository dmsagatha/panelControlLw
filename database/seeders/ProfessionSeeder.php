<?php

namespace Database\Seeders;

use App\Profession;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProfessionSeeder extends Seeder
{
  public function run()
  {
    Profession::create([
        'title' => 'Desarrollador back-end',
    ]);

    Profession::create([
        'title' => 'Desarrollador front-end',
    ]);

    Profession::create([
        'title' => 'Diseñador web',
    ]);
    
    /* DB::table('professions')->insert([
      ['title' => 'Desarrollador back-end'],
      ['title' => 'Desarrollador front-end'],
      ['title' => 'Diseñador web'],
    ]); */
  }
}