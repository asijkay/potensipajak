<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RestoranController extends Controller
{
    public function index(){
    	return view('restoran/index');
    }
}
