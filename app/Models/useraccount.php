<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class useraccount extends Model
{
   public function trainor()
   {
       return $this->belonngsTo('App\Trainor');
      
   }

   public function trainee() 
   {
       return $this->belongsTo('App\trainee');
   }

   
}
