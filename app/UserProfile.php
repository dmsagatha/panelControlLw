<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
  use HasFactory, SoftDeletes;

  protected $guarded = [];

  public function profession()
  {
    return $this->belongsTo(Profession::class)->withDefault([
      'title' => '(Sin profesión)',
    ]);
  }
}