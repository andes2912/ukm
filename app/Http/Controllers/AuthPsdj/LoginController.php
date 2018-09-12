<?php

namespace App\Http\Controllers\AuthPsdj;

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
        $this->middleware('guest:psdj')->except('logout');
    }

    public function ShowLoginForm()
    {
        return view ('psdj.login');
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
        if (Auth::guard('psdj')->attempt($credential, $request->member))
        {
            return redirect()->intended(route('psdj.home'));
        }
	
	        return redirect()->back()->withInput($request->only('email', 'password'));
	}
}
