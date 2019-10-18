<?php 

use Illuminate\Http\Request;
use App\Product;
Route::group(['middleware' => 'auth'], function(){
	Route::get('/', 'ProductController@index')->name('home');
	Route::group(['middleware' => 'mod.check'], function(){
		Route::get('add-new', 'ProductController@addNew')->name('product.add');
		Route::post('add-new', 'ProductController@saveAddNew');
		//edit
		Route::get('edit/{id}', 'ProductController@editForm')->name('product.edit');
		Route::post('edit/{id}', 'ProductController@saveEdit');
		//xóa\
		Route::get('xoa/{id}','ProductController@XoaPost')->name('deleteproduct');
	});
	Route::get('/products', function(Request $request){
		$flight = Product::find($request->id);
		if($flight->status == 0){
			$flight->status = 1;
        }
        else{
			$flight->status = 0;
		}
		$flight->save();
        return redirect(route('home'));
	})->name('product.update');
	
	//status chuyển trạng thái
	Route::get('/products', function(Request $request){
		$flight = Product::find($request->id);
		
		if($flight->status == 0){
			$flight->status = 1;
        }
        else{
			$flight->status = 0;
		}
		$flight->save();
        return redirect(route('home'));
		})->name('product.update');
});

 ?>