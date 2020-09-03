<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\persona;

class personaController extends Controller
{
    public function index()
    {
    	$data = persona::all();
    	return view("persona")->with(["data"=>$data]);
    }
}
