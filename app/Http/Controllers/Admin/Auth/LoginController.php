<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\admin\Admin;

class LoginController extends Controller {
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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';
use AuthenticatesUsers;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function showLoginForm() {
        return view('admin.login');
    }

    public function login(Request $request) {
        $this->validateLogin($request);

        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        return $this->sendFailedLoginResponse($request);
    }
    
    
    
    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
           $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }

    protected function credentials(Request $request)
    {
//        $admin= Admin::where('email',$request->email)->first();
//        if($admin->status == 0){
//            
//            return['email'=>'inactive','password'=>'You are not active person please contact with Admin'];
//        }else{
//             return['email'=>$request->email,'password'=>$request->password,'status'=>1];
//        }
//        
       return['email'=>$request->email,'password'=>$request->password,'status'=>1];
        //return $request->only($this->username(), 'password');
    }

    public function __construct() {
        $this->middleware('guest:admin')->except('logout');
    }
    
     protected function guard()
    {
        return Auth::guard('admin');
    }

}
