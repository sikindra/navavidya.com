<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    use HasFactory;
    protected $table='subcategories';
    public $timestamps='false';
    protected $fillable=['name','created_at','updated_at'] ;

}
 