<?php

namespace App\Http\Controllers\AuthDcfc;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:dcfc')->except('logout');
    }

    public function ShowLoginForm()
    {
        return view ('dcfc.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required|min:6'
	    ]);

        $credential = [
        'email' => $request->email,
        'password' => $request->password
        ];

        // Attempt to Login user
        if (Auth::guard('dcfc')->attempt($credential, $request->member))
        {
            return redirect()->intended(route('dcfc.home'));
        }
	
	        return redirect()->back()->withInput($request->only('email', 'password'));
    }
    
    public function logoutDcfc()
    {
        Auth::guard('dcfc')->logout;
        return redirect('/');
    }
}
