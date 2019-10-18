<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Settings;
class ContactController extends Controller
{
    public function show(Request $request){
        $model = new Settings();
        $settings = Settings::first();
        //echo "<pre>";
        //dd($settings);    
        //echo "</pre>";
         //var_dump($settings->logo);    
        //die();
        return View('_share.contact',[
            'settings'=>$settings,
        ]);
    }
}
