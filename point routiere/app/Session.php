<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $guarded = array('id');

    protected $fillable = array('dateDebut','dateFin','idStatu','idTheme','idAnimateur');

    public static $rules=array(
    	'dateDebut'=>'required|date|before:dateFin',
    	'dateFin'=>'required|date|after:dateDebut',
    	'idStatu'=>'required|integer',
    	'idTheme'=>'required|integer',
    	'idAnimateur'=>'required|integer'
    	);

}
