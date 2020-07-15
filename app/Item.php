<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function sidebar()
    {
      return $this->hasMany('App\Sideber');

    }
}
