<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class attributionController extends Controller
{
    public function create(){
	return view('utilisateur.demande_de_place');
    }

    public function success(){
	return view('utilisateur.demande_de_place_ok');
    }

    public function retour(){
	return view('utilisateur.home');
    }  
	
}
