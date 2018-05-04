<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class horaireController extends Controller
{
    public function voir(){
    	return view('utilisateur.liste_attente');
    }
}
