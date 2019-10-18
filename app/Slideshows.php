<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slideshows extends Model
{
    protected $table = 'slideshows';
    protected $fillable = [
    	'desccription','url','order_number'
    ];   
}
