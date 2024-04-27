<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function index(Request $request ){
        $lan=['php','laravel','react'];
        return view("hello",['nom'=>$request->nom,'lan'=>$lan]);
    }
}
