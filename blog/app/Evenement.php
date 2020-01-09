<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    public function participants()
  {
return $this->belongsToMany(Participant::class);
  }
}