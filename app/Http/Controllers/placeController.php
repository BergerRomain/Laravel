<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Input;

class placeController extends Controller
{
    public function voir($placefile){
	$placefile = User::firstOrCreate(['placefile' => $placefile]);
	return view('utilisateur.place', compact('placefile'));
    }
}
