<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\Models\Client;
use App\http\Controllers\ClientController;

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
    protected $redirectTo;

    public function redirectTo()
    {
        if(Auth::user()->role== "admin")
        {
            $this->redirectTo = route('client.index');
        }
            
                
  
        else
        {
            $email=Auth::user()->email;
                $cpt=Client::where('email', $email)->count();
                if ($cpt==0)
                $this->redirectTo = 'inscrire';
                 else
                 {
                    $client=Client::where('email','like',$email)->first();
                    $id=$client->id;
                    //dd($id);
                    $this->redirectTo = route('client.show',$id);
                }
              
                

        
        }
        return $this->redirectTo;
         
        // return $next($request);
    } 

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest')->except('logout');
    }
}
