<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Record;


class Workclass extends Model
{
  protected $table = 'workclasses';
  public $timestamps = false;

  public function records(){
    return $this->hasMany(Record::class);
  }

  use HasFactory;
}
