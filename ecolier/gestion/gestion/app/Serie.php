<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
	protected $guarded=[];

     public function classes(){
    	return $this->hasMany("App\Classe");}
}
