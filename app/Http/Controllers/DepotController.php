<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepotController extends Controller
{
    public function create1(){
        return view('template.depot_projet');
    }

    public function store1(Request $req ){
        $input=$req->all();
        return view ('template.show_projets')-> with('input',$input);
    }
}
