<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    public function loginForm(){
        return view('auth.login');
    }
    
    public function postLogin(UserRequest $request){
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password]) ){
            return redirect('/homepage');
        }
            return redirect()->route('login')->with('errmsg', 'Sai thông tin tài khoản/mật khẩu123');
    }

     public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
