<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(){
        $tmp=['sok','sao','nit','nani'];
        return view('user.index', ['user'=>$tmp]);
        
    }
    
    function addForm(){
        return view('user.add');
    }
    public function store()
    {
        echo "welcome";
    } 
}
