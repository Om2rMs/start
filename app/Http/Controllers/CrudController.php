<?php

namespace App\Http\Controllers;

use App\models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CrudController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    public function getOffers(){

        //هنا ممكن احدد العناصر اللي ابغاها من الداتا بيس
        return Offer::select('id','name')->get();

    }

    public function create(){

        return view('offers.create');
    }

    public function store(Request $request){

        //validate data before insert to database

        $rules=[
            'name' => 'required|max:100|unique:offers,name',
            'price' => 'required|numeric',
            'details' => 'required',

        ];

        //all عشان تاخذ كل القيم من الفورم وتحولها ل array
        $validator = Validator::make($request->all(),
            $rules, [
            //message error
                //'name.required' => 'اسم العرض مطلوب'
        ]);

        if($validator->fails()){
            //اذا ابغى اعرف بس اول خطا حستخدم first
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }

        //insert
        Offer::create([
            'name' => $request-> name,
            'price' => $request-> price,
            'details' => $request-> details,
        ]);

        return redirect()->back()->with(['success' => 'Successfully']);


    }



}
