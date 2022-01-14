<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\VerifiesEmails;

class UserController extends Controller
{
    public function showUserName(){
        return 'Omar Mohammed saleh';
    }


    public function showIndex(){

        $data = [];
        $data['id'] = 1;
        $data['name'] = 'Omar';

        //return view('welcome',$data);

        //or

        $obj = new \stdClass();
        $obj -> gender = 'male';
        $obj -> age = 24;
        $obj -> country = 'saudi arabia';
        return view('welcome',$data, compact('obj'));

    }
}
