<?php
use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\Product;
Route::group(['middleware' => 'auth'], function(){
	Route::get('/post', 'PostController@index');
	Route::group(['middleware' => 'mod.check'], function(){
	//mod.check là check quyền
		Route::get('post/add-new', 'PostController@addNew')->name('post.add');
		Route::post('post/add-new', 'PostController@saveAddNew');

		Route::get('post/edit/{id}', 'PostController@editForm')->name('post.edit');
		Route::post('post/edit/{id}', 'PostController@saveEdit');
		//sua
	    Route::get('post/xoa/{id}','PostController@XoaPost')->name('post.delete');
	});
	//danhmuc
	Route::get('/cate', 'CategoriesController@index');
  	Route::group(['middleware' => 'mod.check'], function(){
	//xóadanhmuc
		Route::get('xoa/{id}', function($id){
			$cate= Category::destroy($id);
	        DB::table('products')->where('category_id', '=', $id)->delete();
			return redirect('/cate');
		})->name('deletecate');
		//add danh mục
		Route::get('cate/add-new', 'CategoriesController@addNew')->name('cate.add');
		Route::post('cate/add-new', 'CategoriesController@saveAddNew');
		//edit

		Route::get('cate/edit/{id}', 'CategoriesController@editForm')->name('cate.edit');
		Route::post('cate/edit/{id}', 'CategoriesController@saveEdit');
	
	});
	//404
	Route::get('/403', function(){
		return view('auth/403');
		});
		//admin
	Route::get('/admin', function(){    
		return view('index');
	});
	Route::get('/admin',function(Request $request){
		$post= Post::all();
		return view('index',[
		 'danhsach'=>$post
		]);
	});
	
	Route::get('slideshows','SlideshowsController@index');
	Route::group(['middleware' => 'mod.check'], function(){
		Route::get('slideshows/add-new', 'SlideshowsController@addNew')->name('slideshows.add');
		Route::post('slideshows/add-new', 'SlideshowsController@saveAddNew');
	//edit
		Route::get('slideshows/edit/{id}', 'SlideshowsController@editForm')->name('slideshows.edit');
		Route::post('slideshows/edit/{id}', 'SlideshowsController@saveEdit');
	//delete
		Route::get('slideshows/xoa/{id}','SlideshowsController@Xoaslide')->name('slideshows.delete');
	});
	//quyen users
	Route::get('users','UserController@index')->name('users');
	Route::group(['middleware' => 'mod.check'], function(){
		Route::get('users/add-new','UserController@addNew')->name('users.add');
		Route::post('users/add-new','UserController@saveAddNew');
		Route::get('users/edit/{id}', 'UserController@editForm')->name('users.edit');
		Route::post('users/edit/{id}', 'UserController@saveEdit');
		Route::get('users/xoa/{id}','UserController@removeUser')->name('users.delete');
		Route::get('comments/xoa/{id}','CommentsController@removeComments')->name('comments.delete');
	});
	Route::get('comments','CommentsController@index')->name('comments');

});
Route::get('/index',function(){
	return view('hompage');	
	})->name('index');
//Route::get('/home',function(){
//	return view('_share/home');
//});
Route::get('home', 'ProductController@show');

Route::get('about', 'AboutController@show');

Route::get('shop', 'ShopController@show');


Route::get('blog',function(){
	return view('_share/blog');
});
Route::get('contact','ContactController@show');

Route::get('cart',function(){
	return view('_share/cart');
})->name('cart');

//chi tiet san pham
//webSetting
Route::get('index', 'SettingsController@index')->name('settings');
Route::get('123', 'SettingsController@show');
//chitiet san pham
Route::get('single/{id}', 'SingerController@hienthi')->name('product.chitiet');
Route::get('single/add-new/{id}', 'SingerController@addnew')->name('product.addnew');
Route::post('single/add-new/{id}', 'SingerController@saveAddNew');
//shop

//login
Route::get('cp-login', 'Auth\LoginController@loginForm')->name('login');
Route::post('cp-login', 'Auth\LoginController@postLogin');
Route::any('logout', 'Auth\LoginController@logout')->name('logout');


