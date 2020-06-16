<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
// use Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use DB;
use App\Admin;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;



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

    protected function guard()
    {
        return Auth::guard('admin');
    }
    protected function showloginform()
    {
        return View('admin_login_layout.login');
    }

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = 'dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');;
    }

    
    protected function credentials(Request $request)
    {
        // dd($request);

        return ['email'=>$request->{$this->username()},'password'=>$request->password];
    }
    
    public function logout(Request $request)
    {
      // dd($request);

          $this->guard()->logout();

          $request->session()->invalidate();

          return redirect()->route('admin_login1');
    }

    public function login_d()
    {
      return view('admin_login_layout.login_d');
    }
}
