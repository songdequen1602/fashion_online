<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Settings;
use App\Category;
class ShopController extends Controller
{
    public function show(Request $request){
        $model = new Settings();
        $settings = Settings::first();
        $model = new Category();
        $category=Category::all();
         return View('_share.shop',[
            'settings'=>$settings,
            'category'=>$category,
        ]);
    }
}
