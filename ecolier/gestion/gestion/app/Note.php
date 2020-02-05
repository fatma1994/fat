<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $guarded=[];
     public function Matiere(){
    	return $this->belongsTo("App\Matiere");} 
    	public function Eleve(){
    	return $this->belongsTo('App\Eleve');}
    
}
