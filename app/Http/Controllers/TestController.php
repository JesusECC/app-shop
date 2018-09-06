<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;
class TestController extends Controller
{
    //
    public function welcome(){
        $products=Product::all();
        //$products=DB::table('products')->get();
        //dd($products);
        return view('welcome')->with(compact('products'));
    }
}
