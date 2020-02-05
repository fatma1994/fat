<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
	protected $guarded=[];

	 public function Classes(){
    	return $this->hasMany("App\Classe");} 
    //
}
