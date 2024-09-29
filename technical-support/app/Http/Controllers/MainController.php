<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('index');
    }
    public function getProblem(Request $request){
        $text = $request->input('problemtext');
        return view('test', ['text' => $text]);
    }
}
