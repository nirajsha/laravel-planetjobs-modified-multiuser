<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
  public function category()
    {
        return $this->belongsToMany('App\Category');
    }
}
