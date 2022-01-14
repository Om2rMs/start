<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});

//example
Route::get('/test1', function () {
    return 'welcome';
});


//route parameters
Route::get('/test2/{id}', function ($id) {
    return $id;
});

Route::get('/test3/{id?}', function () {
    return 'welcome';
});


//route name

Route::get('/show-number/{id}', function ($id) {
    return $id;
})->name('a');

Route::get('/test3/{id?}', function () {
    return 'welcome';
})->name('b');


//namespace

Route::group(['namespace' => 'Front','prefix'=>'users'],function(){

    //كل الروت راح يتمكنو من الوصول الى الكنترولير او الميثود اللي في فولدر فرونت
    Route::get('/','UserController@showUserName');
    Route::get('index','UserController@showIndex');

});
//طريقة ثانية للكتابة
//Route::namespace('Front')->group(Function(){

    //كل الروت راح يتمكنو من الوصول الى الكنترولير او الميثود اللي في فولدر فرونت
    //Route::get('users','UserController@showUserName');

//});


//اذا موجود ميديل وير اسمه auth لازم يكون عندك صلاحية للدخول
//يستخدمو الprefix عشان يجمعو كل شي تحت مظلة وحدة
Route::group(['prefix' => 'users2'],function(){

    Route::get('/',function(){
        return 'ITC';
    });
});

// اذا ما استخدمنا namespace لازم نكتب الnamespace في جملة الaction
Route::get('second','Front\SecondController@showString');
Route::get('second1','Front\SecondController@showString1');
Route::get('second2','Front\SecondController@showString2');


Route::resource('news','NewsController');

Route::get('/landing',function(){
    return view('landing');
});
*/

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home') ->middleware('verified');
