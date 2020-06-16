<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;

use Session;
use Illuminate\Support\Facades\URL;

// use Request;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    // protected function redirectTo()
    // {
    //     return Request::session()->get('url.intended') ?? '/c_layout';
    // }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
public function showLoginForm()
    {
        
        // Session::put('url.intended',URL::previous());
        return view('auth.login');
    }

    
    public function __construct()
    {
            $this->middleware('guest')->except('logout');
            Session::put('preUrl', URL::previous());
    }
    public function redirectTo()
{
    return Session::get('preUrl') ? Session::get('preUrl') :   $this->redirectTo;
}


    public function logout(Request $request)
    {
      // dd($request);

          $this->guard()->logout();

          $request->session()->invalidate();

          return redirect()->route('c_layout');
    }
}
