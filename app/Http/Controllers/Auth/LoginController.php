<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\User;

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
   // protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


     public function login(Request $request)
    {   
        $input = $request->all();
   
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
   
        
        if(auth()->attempt(array('email' =>$input['email'], 'password' =>$input['password'])))
        {
            if(auth()->user()->roles=='master')
            {
                return redirect()->route('admin');
               
            }  

            if(auth()->user()->roles=='admin')
            {
                return redirect()->route('tech');
               
            } 

            if(auth()->user()->roles=='usuario')
            {
                return redirect()->route('usuario');
               
            } 

        }
             
        else
        {
            return redirect()->route('inicio')
                ->with('error','Existe un error en los datos.');
        }
          
    }



}
