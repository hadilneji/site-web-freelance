<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Projet;

class ProjectController extends Controller
{
    public function show(Request $req){
        $projet[0]=new Projet(1,'Tayara',100,'vente en ligne',date('Y/m/d'));
        $projet[1]=new Projet(2,'EveryDinar',300,'gestion de budget',date('Y/m/d'));
        $projet[2]=new Projet(3,'LOGO',140,'ste',date('Y/m/d'));
        $input=$req->all();
        return view('template.show_projets',compact('projet','input'));
    }
    
}
