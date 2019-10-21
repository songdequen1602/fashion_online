<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UsersRequest;
use App\User;


class UserController extends Controller
{
	public function index(Request $request){
 
		if(!$request->has('keyword') || empty($request->keyword) ){
			$user =User::paginate(10);
		}else{
			 $kw = $request->keyword;
			 $user = User::where('name', 'like', "%$kw%")
								->paginate(10);
			 $user->withPath("?keyword=$kw");
		}
			return view('_admin/users/list-users',[
				'user'=>$user
			]);
 	}
 	public function addNew(){
    	$model = new User();
    	// $authors = User::all();
    	// $cates = Category::all();
    	return view('_admin.users.add-form', compact('model'));
    }
    public function saveAddNew(UsersRequest $request){
    	$model = new User();
    	//$password= password_hash($password, PASSWORD_DEFAULT);
    	$password= Hash::make ($request->password);
        if($request->hasFile('avatar')){
            $oriFileName = $request->avatar->getClientOriginalName();
            $filename = str_replace(' ', '-', $oriFileName);
            $filename = uniqid() . '-' . $filename;
            $path = $request->file('avatar')->storeAs('posts', $filename);
            $model->avatar = 'images/'.$path;
        }
    	$model->fill($request->all());
    	$model->password = $password;
    	// dd($model);
    	$model->save();
    	return redirect(route('users'));
    }

     public function editForm($id){
        $model = User::find($id);
        if(!$model){
        return redirect(route('users'));
        }
        $users = User::all();
        // $authors = User::all();
        return view('_admin.users.edit-form', compact('model', 'users'));
    }

    public function saveEdit(UsersRequest $request){
        $model = User::find($request->id);
        $password= Hash::make ($request->password);
        if($request->hasFile('avatar')){
            $path = $request->file('avatar')->storeAs('posts', 
            str_replace(' ', '-', uniqid() . '-' .$request->avatar->getClientOriginalName()));
            $model->avatar = 'images/'.$path;
        }
        $model->fill($request->all());
        $model->password = $password;
        $model->save();
        return redirect(route('users'));
    }
    public function removeUser($id){
          $user= User::destroy($id);
            return redirect(route('users')); 
    }

}
