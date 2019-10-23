<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
class Comments extends Model
{
   protected $table = 'comments';
   protected $fillable = [
    	'email','curtomer_name','address','product_id'
    ]; 

     public function products(){
        return $this->belongsTo('App\Product','product_id','id');
    }
}
