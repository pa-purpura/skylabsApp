<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Record;


class Sex extends Model
{
  protected $table = 'sexes';
  public $timestamps = false;

  public function records(){
    return $this->hasMany(Record::class);
  }

  use HasFactory;
}
