<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class horaire extends Model
{
       	protected $table = 'horaire';
    	protected $fillable = ['dateDebut', 'dateFin'];
}
