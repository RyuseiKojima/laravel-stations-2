<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Screen extends Model
{
  // use HasFactory;
  public function schedules() {
    return $this->hasMany('App\Models\Schedule');
  }

  public function sheets() {
    return $this->hasMany('App\Models\Sheet');
  }
}
