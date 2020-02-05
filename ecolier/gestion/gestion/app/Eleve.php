<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    protected $guarded=[];
    public function Inscriptions(){
    	return $this->hasMany("App\Inscription");}
    	  public function Notes(){
    	return $this->hasMany('App\Note');}
}
