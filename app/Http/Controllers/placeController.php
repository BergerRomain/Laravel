<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Input;
use App\attribution;
use \Auth;

class placeController extends Controller
{
    public function voir(){
	$numplace = attribution::select('numplace')->where('id', Auth::user()->id)->latest()->first();
	return view('utilisateur.place', compact('numplace'));
    }
}
