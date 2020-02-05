<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
	protected $guarded=[];
     public function cours(){
    	return $this->hasMany("App\Cours");
     }
       public function Notes(){
    	return $this->hasMany("App\Note");}
}
