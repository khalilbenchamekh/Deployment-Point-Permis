<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Stagaire;

class Stagaire extends Model
{
    protected $guarded = array('id');
    protected $fillable = array('cin','nom','prenom','idPermis','tel','email','idSession');

    public static $rules = array(
    	'cin'=>'required|string',
    	'nom'=>'required|string|max:20',
    	'prenom'=>'required|string|max:20',
    	'idPermis'=>'required|string',
    	'tel'=>'required|integer',
    	'email'=>'required|email',
    	'idSession'=>'required|integer');
}
