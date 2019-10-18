<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slideshows;
use App\Http\Requests\SlideRequest;
class SlideshowsController extends Controller
{
    public function index(Request $request){
 
	$model=new Slideshows();
	$slideshows=Slideshows::all();
	 return view('_admin.slideshows.list_slideshows',[
			'slideshows'=>$slideshows
	]);
	}
	public function addNew(){
    $model = new Slideshows();
    return view('_admin.slideshows.add-form', compact('model'));
    }
    public function saveAddNew(SlideRequest $request){
    $model = new Slideshows();

    if($request->hasFile('image')){
           
    $oriFileName = $request->image->getClientOriginalName();
    $filename = str_replace(' ', '-', $oriFileName);
    $filename = uniqid() . '-' . $filename;
    $path = $request->file('image')->storeAs('posts', $filename);
    $model->image = 'images/'.$path;
    }
        
    $model->fill($request->all());
    // dd($model);
    $model->save();
    return redirect('/slideshows');
    }

    public function editForm($id){
        $model = Slideshows::find($id);
        if(!$model){
        return redirect('/slideshows');
        }
        $cates = Slideshows::all();
        // $authors = User::all();
        return view('_admin.slideshows.edit-form', compact('model', 'cates'));
    }

    public function saveEdit(SlideRequest $request){
        $model = Slideshows::find($request->id);
        if($request->hasFile('image')){
            $path = $request->file('image')->storeAs('posts', 
            str_replace(' ', '-', uniqid() . '-' .$request->image->getClientOriginalName()));
            $model->image = 'images/'.$path;
        }
        $model->fill($request->all());
        $model->save();
        return redirect('/slideshows');
    }
    public function Xoaslide($id){
          $slideshows= Slideshows::destroy($id);
            return redirect('/slideshows'); 
    }

}
