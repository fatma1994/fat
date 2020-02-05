<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cours extends Model
{
	protected $guarded=[];
    public function Matiere(){
    	return $this->belongsTo("App\Matiere");} 
    	 public function Teacher(){
    	return $this->belongsTo("App\Teacher");} 
    	 public function Classe(){
    	return $this->belongsTo("App\Classe");} 
}
