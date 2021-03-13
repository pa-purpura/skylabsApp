<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Record;

class Race extends Model
{
  protected $table = 'races';
  public $timestamps = false;

  public function records(){
    return $this->hasMany(Record::class);
  }

  use HasFactory;
}
