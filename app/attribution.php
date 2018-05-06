<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class attribution extends Model
{
    protected $table = 'attribution';
    protected $fillable = ['id', 'numplace', 'dateDebut', 'dateFin'];
}
