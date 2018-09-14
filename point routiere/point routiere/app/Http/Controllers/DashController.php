<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DashController extends Controller
{
	/*
        Created by Ahmed Ouberka
        ahmedouberka@hotmail.com
        Date 18/09/2016
        Absence Controller
    */

    public function index()
    {
    	return view('dashboard.index');
    }
}