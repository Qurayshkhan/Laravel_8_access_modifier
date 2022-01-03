<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class students extends Model
{
    public $timestamps=false;
    use HasFactory;
    //Accessor
    public function getNameAttribute($name){
       return ucfirst($name);
    //    return "Mr/Ms :".$name;
    }
    //Modurator
    public function setCityAttribute($value){
      $this->attributes['city']= $value. "Pakistan";
    }
}
