<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use function Termwind\render;

class MainController extends Controller
{
    public function login(){
        if (empty($_COOKIE['login'])){
            return view('login');
        }
        return redirect()->route('problems', ['login' => $_COOKIE['login'], 'password'=>$_COOKIE['password']]);
    }

    public function showProblems(Request $request){
        $login = $request->input('login');
        $password = $request->input('password');

        $_COOKIE['login'] = $login;
        $_COOKIE['password'] = $password;

        return view('problems');
    }

    public function createTask(Request $request){
        $header = $request->input("header");
        $text = $request->input("problemtext");
        DB::insert('insert into problems (id, title, problem_text, date, username) values (NULL, :header, :text, current_date, :username)', [':header' => $header, ':text' => $text, ':username'=>$_COOKIE['login']]);
    }
}
