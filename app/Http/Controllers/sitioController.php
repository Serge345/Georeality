<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class sitioController extends Controller
{
    //

    public function inicio(){

      return view('Sitios.inicio');
    }

    public function create(Request $request){

      return view('Sitios.agregarSitio');
    }

    public function show(Request $request){

    return view('Sitios.sitio');
    }

    public function index(Request $request){

      return view('Sitios.verSitios');
    }
}
