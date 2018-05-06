<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class liste_utilisateursController extends Controller
{
    public function voir(){
	$requete = User::select('name', 'prenom', 'email', 'numplace')->orderBy('name')->get();
   	return view('administrateur.liste_utilisateurs', compact('requete'));
    }
}
