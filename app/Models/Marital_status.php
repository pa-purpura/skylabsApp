<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Record;

class Marital_status extends Model
{
  protected $table = 'marital_statuses';
  public $timestamps = false;

  public function records(){
    return $this->hasMany(Record::class);
  }

  use HasFactory;
}
