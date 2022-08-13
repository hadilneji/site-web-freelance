<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
  public function create()
  {
   return view('template.inscrip-redacteur');  
  }

  public function store(Request $request)
  {
    $inputs=$request->all();

    return view('template.profil_red',compact('inputs'));
  }
    
}
