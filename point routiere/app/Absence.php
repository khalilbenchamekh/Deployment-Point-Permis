<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    protected $guarded = array('id');
    protected $fillable = array('idStagaire','idJournee','idModule');

    public static $rules = array(
    	'idStagaire'=>'required|integer',
    	'idJournee'=>'required|integer',
    	'idModule'=>'required|integer'
    	);
}
