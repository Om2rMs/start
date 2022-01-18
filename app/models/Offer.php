<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    //نعرف التيبل اللي في الداتا بيس على الموديل ذا
    protected $table = "offers";
    protected $fillable = ['name','price','details','created_at','updated_at'];
    //هنا اذا ابغى اخفي العناصر ذي من كل مكان
    protected $hidden = ['created_at','updated_at'];
    public $timestamps = false;


}
