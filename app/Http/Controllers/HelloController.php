<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HelloController extends Controller{
  
    public function index(){
        $sql = DB::table('profiles')->get();
        //dd($sql);
        return view('hello',compact('sql'));
    }

    public function showForm(){
        return view('profile_form');
    }

    public function stud(){
        return view('')
    }
}

?>