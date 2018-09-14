<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Stagaire;
use App\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class StagaireController extends Controller
{

    /*
        Created by Ahmed Ouberka
        ahmedouberka@hotmail.com
        Date 18/09/2016
        Stagaire Controller
    */

    public function index()
    {
    	$stagaire=Stagaire::all();
    	return view('dashboard.stagaire.index',compact('stagaire'));
    }

    public function create()
    {
    	$session=Session::all();
    	return view('dashboard.stagaire.create',compact('session'));
    }

    public function store()
    {
        $input = Input::all();
        $validation = Validator::make($input,Stagaire::$rules);

        if ($validation->passes()) {
            
            Stagaire::create($input);

            return Redirect::route('stagaire.index');
        }

        return Redirect::route('stagaire.create')
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
    }

    public function destroy($id)
    {
        Stagaire::find($id)->delete();
        return Redirect::route('stagaire.index');
    }

    public function edit($id)
    {
        $stagaire = Stagaire::find($id);

        if (is_null($stagaire)) {
            return Redirect::route('stagaire.index');
        }

        return View::make('dashboard.stagaire.edit',compact("stagaire"));
    }

    public function update($id)
    {
        $input = Input::all();
        $validation = Validator::make($input, Stagaire::$rules);
        if ($validation->passes())
        {
            $stagaire = Stagaire::find($id);
            $stagaire->update($input);
            return Redirect::route('stagaire.index');
        }
        return Redirect::route('stagaire.edit', $id)
                    ->withInput()
                    ->withErrors($validation)
                    ->with('message', 'There were validation errors.');
    }

    public function show($id)
    {
        $stagaire = Stagaire::find($id);

        if (is_null($stagaire)) {
            return Redirect::route('stagaire.index');
        }

        return view('dashboard.stagaire.show',compact('stagaire'));
    }
}
