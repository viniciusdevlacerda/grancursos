<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(){
        return view('teste',[
            'teste'=>'Hello World',
            'checagem' => true,
        ]);
    }
}
