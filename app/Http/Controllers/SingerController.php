<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Settings;
use App\Product;
use App\Category;
use App\Comments;
class SingerController extends Controller
{
   
     public function hienthi($id){
        $model = new Settings();
        $settings = Settings::first();
        $model = Product::find($id);
        $product = Product::where('id', '=', $id)->first();
        $relativeProduct = Product::where('category_id', '=', $product->category_id)->limit(6)->get();
        $model=  new Comments;
        $comments= Comments::where('product_id','=', $id)->get();
        
         return view('_share/single-product',[
        'settings'=>$settings,
        'product'=>$product,
        'relativeProduct'=>$relativeProduct,
        'comments'=>$comments,
        ]);
        
        }
    public function addnew(){
        $model = new Comments();
        $cates = Comments::all();
        return view('_share.single-product', compact( 'cates'));
    }
    public function saveAddNew(Request $request){
        $model = new Comments();
        $model->fill($request->all());
        $model->save();
        return redirect()->back();
    }
    
}
