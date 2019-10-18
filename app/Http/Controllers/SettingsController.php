<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Settings;
class SettingsController extends Controller
{
     public function index(Request $request){
        $model = new Settings();
        $settings = Settings::all();
        return View('_admin/web-settings/list-settings',[
            'cart'=>$settings
        ]);
    }
    public function show(Request $request){
        $model = new Settings();
        $settings = Settings::all();
        // die("I am testing...");
        return View('layouts_template.main',[
            'settings'=>$settings
        ]);
    }

    public function homepage(Request $request){
        $model = new Settings();
        $settings = Settings::all();
        // die("I am testing...");
        return View('settings.show',[
            'settings'=> $settings
        ]);
    }

    // public function hienthi(Request $request){
    //     $model = new Settings();
    //     $settings = Settings::all();
    //     return View('_share/contcat',[
    //         'baiviet'=>$settings
    //     ]);
    // }
   
   
}
