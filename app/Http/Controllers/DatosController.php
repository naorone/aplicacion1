<?php

namespace App\Http\Controllers;

use App\Datos;
use Illuminate\Http\Request;

class DatosController extends Controller
{


    public function index()
    {
        return view('welcome');
    }

    public function  adios()
    {
        return view('adios');
    }

    public function adiospost(Request $request)
    {
        Datos::create($request->all());
        return view('adiospost');
    }
}
