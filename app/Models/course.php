<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    public function trainee() 
   {
       return $this->belongsTo('App\trainee');
   }

}