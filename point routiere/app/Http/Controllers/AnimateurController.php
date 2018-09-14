<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animateur;
use View;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class AnimateurController extends Controller
{
    /*
        Created by Ahmed Ouberka
        ahmedouberka@hotmail.com
        Date 18/09/2016
        Animateur Controller
    */

    public function index()
    {
    	$animateur=Animateur::all();

    	return view::make('dashboard.animateur.index',compact('animateur'));
    }

    public function create()
    {
    	return view('dashboard.animateur.create');
    }

    public function store()
    {
    	$input = input::all();
    	$validation = Validator::make($input, Animateur::$rules);

    	if($validation->passes())
    	{
    		Animateur::create($input);
    		return Redirect::route('animateur.index');
    	}

    	return Redirect::route('animateur.create')
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
    }

    public function destroy($id)
    {
        Animateur::find($id)->delete();
        return Redirect::route('animateur.index');
    }

    public function edit($id)
    {
        $animateur = Animateur::find($id);

        if (is_null($animateur)) {
            return Redirect::route('animateur.index');
        }

        return View::make('dashboard.animateur.edit',compact("animateur"));
    }

    public function update($id)
    {
        $input = Input::all();
        $validation = Validator::make($input, Animateur::$rules);
        if ($validation->passes())
        {
            $animateur = Animateur::find($id);
            $animateur->update($input);
            return Redirect::route('animateur.index');
        }
        return Redirect::route('animateur.edit', $id)
                    ->withInput()
                    ->withErrors($validation)
                    ->with('message', 'There were validation errors.');
    }

    public function show($id)
    {
        $animateur = Animateur::find($id);

        if (is_null($animateur)) {
            return Redirect::route('animateur.index');
        }

        return view('dashboard.animateur.show',compact('animateur'));
    }
}
