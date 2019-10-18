<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // 
    protected $table='products';
    
    protected $fillable = [
    	'name', 'price',
    	'detail', 'amount','status','category_id'
    	
    ];
    public function categories(){
    	return $this->belongsTo('App\Category', 'category_id', 'id');
    }
    public function comments(){
        return $this->hasMany('App\Comments', 'product_id', 'id');
    }
    

}
