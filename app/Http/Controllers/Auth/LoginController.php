<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use http\Env\Request;
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {

        $value = request()->input('identify'); // اخذ الفاليو من الانبوت واحطه في قيمه
        $field = filter_var($value,FILTER_VALIDATE_EMAIL) ? 'email' : 'mobile'; // اسوي فلترة لو كان ايميل
        Request()->merge([$field=>$value]); // اسوي ميثود ميرج عشان اضيف في الريكوست

        return $field;

    }
}


