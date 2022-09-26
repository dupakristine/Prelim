<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trainee extends Model
{
    public function useraccounts()
    {
        return $this->hasMany('App\useraccounts');
    }

    public function courses()
    {
        return $this->hasMany('App\courses');
    }
}
