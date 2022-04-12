<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['name', 'email', 'phone', 'last_name','address1','address2','city','state','country','zip','password','is_verify','rand_id'];
}

   
