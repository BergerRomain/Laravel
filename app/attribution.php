<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attribution extends Model
{
    protected $fillable = ['numplace', 'dateDebut', 'dateFin'];
}
