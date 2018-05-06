<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Input;
use App\attribution;
use App\User;
use \Auth;

class attributionController extends Controller
{
    public function create(){
	return view('utilisateur.demande_de_place');
    }

    public function success(){
        $requeteAttribution = attribution::create(['id' => Auth::user()->id, 'numplace' => Input::get('numplace'), 'dateDebut' => Input::get('dateDebut'), 'dateFin' => Input::get('dateFin')]);
	$requetePlacefile = User::find(Auth::user()->id)->update(['placefile' => attribution::count(), 'numplace' => Input::get('numplace')]);
	return view('utilisateur.demande_de_place_ok');
    }

    public function retour(){
	return view('utilisateur.home');
    }  
	
}
