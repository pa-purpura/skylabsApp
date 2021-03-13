<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Workclass;
use App\Models\Sex;
use App\Models\Country;
use App\Models\Education_level;
use App\Models\Marital_status;
use App\Models\Relationship;
use App\Models\Occupation;
use App\Models\Race;

class Record extends Model
{
  protected $table = 'records';
  public $timestamps = false;


  public function workclass(){
    return $this->belongsTo(Workclass::class);
  }

  public function sex(){
    return $this->belongsTo(Sex::class);
  }

  public function country(){
    return $this->belongsTo(Country::class);
  }

  public function education_level(){
    return $this->belongsTo(Education_level::class);
  }

  public function marital_status(){
    return $this->belongsTo(Marital_status::class);
  }

  public function relationship(){
    return $this->belongsTo(Relationship::class);
  }

  public function occupation(){
    return $this->belongsTo(Occupation::class);
  }

  public function race(){
    return $this->belongsTo(Race::class);
  }

  use HasFactory;
}
