<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User; 
use \Auth;

class listeController extends Controller
{
    public function voir(){
	$placefile = Auth::user()->placefile;
    	return view('utilisateur.liste_attente', compact('placefile'));
    }
}
