<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Record;


class Occupation extends Model
{
  protected $table = 'occupations';
  public $timestamps = false;

  public function records(){
    return $this->hasMany(Record::class);
  }

  use HasFactory;
}
