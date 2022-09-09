<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable=[
          'nom','prenom','wilaya','date_naissance',
           'commune','nationalite','Tel','nom_ar','prenom_ar','wilaya_ar','date_naissance_ar','commune_ar','nationalite_ar','email','horaire_choisi','qualite_condidat','faculte','dpt','photo'
    ];
}
