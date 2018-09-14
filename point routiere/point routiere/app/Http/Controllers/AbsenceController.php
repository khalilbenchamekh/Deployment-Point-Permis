<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Absence;
use App\Journee;
use App\Module;
use App\Stagaire;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class AbsenceController extends Controller
{
    /*
        Created by Ahmed Ouberka
        ahmedouberka@hotmail.com
        Date 18/09/2016
        Absence Controller
    */

    public function index()
    {
    	$absence=Absence::all();
    	
        $stagaire = new Stagaire;

        foreach ($absence as $a) {
            $stagaire = Stagaire::where($a->idStagaire);
        }

    	return view('dashboard.absence.index',compact('stagaire','absence'));
    }

    public function create()
    {
    	$stagaire=Stagaire::all();
    	$module=Module::all();
    	$journee=Journee::all();

        foreach ($absence as $a) {
            
        }
    	return view('dashboard.absence.create',compact('stagaire','module','journee'));
    }

    public function store()
    {
        $input = input::all();
        $validation = Validator::make($input, Absence::$rules);

        if($validation->passes())
        {
            Absence::create($input);

            return Redirect::route('absence.index');
        }

        return Redirect::route('absence.create')
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
    }
}
