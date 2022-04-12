<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table='categories';
    public $timestamps='false';
    protected $fillable=['name','stud_level','sub_names','description','image','id','status','subject_desc','subject_names'];
}
