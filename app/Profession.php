<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
  use HasFactory;
  //protected $table = 'my_professions';

  //public $timestamps = false;

  protected $fillable = ['title'];

  public function profiles()
  {
    return $this->hasMany(UserProfile::class);
  }
}