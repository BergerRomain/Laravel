<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\attribution;
use \Auth;

class liste_placeController extends Controller
{
    public function voir(){
	$requete = attribution::select('numplace', 'dateDebut', 'dateFin')->orderBy('numplace')->get();
   	return view('administrateur.liste_place', compact('requete'));
    }

    public function modifier(){
	return view('administrateur.liste_place_modifier');
    }

    public function ok(){
	$requete = attribution::update('numplace', 'dateDebut', 'dateFin')->where('numplace');
	return view('administrateur.liste_place_modifier_ok');
    }

    public function supprimer(){
	$requete = attribution::delete()->where('numplace');
	return view('administrateur.liste_place_supprimer');
    }
}
