<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
	protected $guarded=[];
     public function cours(){
    	return $this->hasMany("App\cours");}
}
