<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\attribution;
use \Auth;

class historiqueController extends Controller
{
    public function voir(){
	$requete = attribution::select('numplace', 'dateDebut', 'dateFin')->where('id', Auth::user()->id)->get();
    	return view('utilisateur.historique_place_attribue', compact('requete'));
    }
}
