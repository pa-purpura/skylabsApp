<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workclass extends Model
{
  protected $table = 'workclasses';
  public $timestamps = false;

  use HasFactory;
}
