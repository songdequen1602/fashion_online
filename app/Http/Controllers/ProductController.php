<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Product;
use App\Category;
use App\Settings;
use App\Slideshows;
use App\Comments;
class ProductController extends Controller
{
    public function index(Request $request){
 
		if(!$request->has('keyword') || empty($request->keyword) ){
			$products = Product::paginate(5);
		}else{
			 $kw = $request->keyword;
			 $products = Product::where('name', 'like', "%$kw%")
							->paginate(5);
			 $products->withPath("?keyword=$kw");
		}
	    return view('_admin/products/list-product',[
			'baiviet'=>$products
		]);
    }
    //code hien thị giao dien
    public function show(Request $request){
        $model = new Product();
        $products = Product::all();
        $slideshow= Slideshows::all();
        $model = new Settings();
        $settings = Settings::first();
        //echo "<pre>";
        //dd($settings);    
        //echo "</pre>";
         //var_dump($settings->logo);    
        //die();
        return View('_share.home',[
            'products'=>$products,
            'settings'=>$settings,
            'slideshow'=>$slideshow,    
        ]);
    }
    function test() {

        return view('products.test');
    }


    public function addNew(){
    	$model = new Product();
    	$cates = Category::all();
    	return view('_admin.products.add-form', compact('model', 'cates'));
    }

    public function saveAddNew(ProductRequest $request){
      	
    	$model = new Product();

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
    	return redirect(route('home'));    
    }

    //edit
    public function editForm($id){
        $model = Product::find($id);
        if(!$model){
           return redirect(route('home'));
        }
        $cates = Category::all();
        return view('_admin.products.edit-form', compact('model', 'cates'));
    }

    public function saveEdit(ProductRequest $request){
        $model = Product::find($request->id);
        if($request->hasFile('image')){
            $path = $request->file('image')->storeAs('posts', 
            str_replace(' ', '-', uniqid() . '-' .$request->image->getClientOriginalName()));
            $model->image = 'images/'.$path;
        }

        if($request->status == null) {
            $model->status = 0;
        }
        $model->fill($request->all());
        $model->save();
        return redirect(route('home'));
    }
    //xoa
     public function XoaPost($id){
            $comment= Comments::first();
            $post= Product::where($id,'=',$comment->product_id)->delete();
            return redirect(route('home')); 
    }
     public function xoaAll(Request $request){
            $delid= $request->input('check');
            $comment= Comments::first();
            $post= Product::where("id", $delid)->delete();
            return redirect(route('home')); 
    }
}
