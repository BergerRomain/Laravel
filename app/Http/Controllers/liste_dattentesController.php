<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class liste_dattentesController extends Controller
{
    public function voir(){
	$requete = User::select('placefile', 'name', 'prenom', 'attribution.numplace')->join('attribution', 'attribution.id', '=', 'users.id')->whereNotNull('placefile')->orderBy('placefile')->get();
   	return view('administrateur.liste_dattentes', compact('requete'));
    }
}
