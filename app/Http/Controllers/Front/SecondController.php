<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SecondController extends Controller
{
    //اذا كان هناك ميدل وير في construct راح تكون كل الفانكشن ممعتمدة عليه
    //اما اذا كان ميديل وير موجود في صفحة web.php عند اي روت  راح يكون مخصص للروت الموجود عنده
    public function __construct()
  {
      //تستخدم except اذا في فنكشن ماتبغاها تتطبق عليها الauth
      $this->middleware('auth')->except('showString2');
  }

    public function showString(){
        return 'HI ';
    }
    public function showString1(){
        return 'HI 1 ';
    }
    public function showString2(){
        return 'HI 2 ';
    }
}
