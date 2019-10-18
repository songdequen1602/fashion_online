<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Settings extends Model
{
    protected $table = 'web_settings';
    protected $fillable = [
    	'logo', 'hotline','map','facebook','email'
    ];   
}
