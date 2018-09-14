<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animateur extends Model
{
    protected $guarded = array('id');
    protected $fillable = array('nom','prenom','NumeroInscription');

    public static $rules = array(
    	'nom'=>'required|string|max:20',
    	'prenom'=>'required|string|max:20',
    	'NumeroInscription'=>'required|string|max:10'
    	);
}
