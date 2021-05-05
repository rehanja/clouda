<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class profiles extends Controller
{
    function list()
    {

        $data= Http::get('https://reqres.in/api/users')->json();
        
        //dd ($data);
      
        return view('welcome',['data'=>$data['data']]);
    }

}
