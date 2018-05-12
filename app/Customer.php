<?php

namespace pruebas;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
       'name'
	]; 
     public function user(){
   	return $this->belongs(User::class);
   } 
}
