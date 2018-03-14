<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerContato extends Controller{

    public function index(){
      return "Index do contato_control home";
    }

    public function posts(Request $req){
      dd($req->all());
      return "Index do contato_control posts";
    }

    public function puts(){
      return "Index do contato_control puts";
    }
}
