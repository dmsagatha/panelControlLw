<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
  use HasFactory;
  public static function getList()
  {
    return static::query()->orderBy('name')->get();
  }
}