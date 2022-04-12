<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mode extends Model
{
    use HasFactory;
    protected $table='modes';
    public $timestamps='false';
    protected $fillable=['name','description','image','doc','video'] ;
    
}
