<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Session;
use App\Statu;
use App\Theme;
use App\Animateur;
use App\Http\Requests;
use View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class SessionController extends Controller
{

    /*
        Created by Ahmed Ouberka
        ahmedouberka@hotmail.com
        Date 18/09/2016
        Session Controller
    */


    public function index()
    {
    	$sessions = Session::all();

    	return view('dashboard.session.index',compact('sessions'));
    }

    public function create()
    {
    	$stat=Statu::all();
    	$thm=Theme::all();
    	$anim=Animateur::all();
    	return view('dashboard.session.create',compact('stat','thm','anim'));
    }

    public function store()
    {
        $input = input::all();
        $validation = Validator::make($input, Session::$rules);

        if ($validation->passes()) 
        {
            Session::create($input);
            return Redirect::route('session.index');
        }

        return Redirect::route('session.create')
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
    }

    public function show($id)
    {
        $session = Session::find($id);

        return view('dashboard.session.show',compact('session'));
    }

    public function destroy($id)
    {
        Session::find($id)->delete();
        return Redirect::route('session.index');
    }

    public function edit($id)
    {
        $session = Session::find($id);

        if (is_null($session)) {
            return Redirect::route('session.index');
        }
        else{
            $anim = Animateur::find($session->id);
            return View::make('dashboard.session.edit',compact('session','anim'));
        }
        
    }
}