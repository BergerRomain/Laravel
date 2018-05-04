<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class historiqueController extends Controller
{
    public function voir(){
    	return view('utilisateur.historique_place_attribue');
    }
}
