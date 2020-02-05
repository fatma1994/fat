<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
	protected $guarded=[];
     public function Classe(){
    	return $this->belongsTo("App\Classe");} 
    	public function Eleve(){
    	return $this->belongsTo("App\Eleve");}
}
