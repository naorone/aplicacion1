<?php

namespace App\Http\Controllers;

use App\personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function adios()
    {
        return view('adios');
    }

    public function adiospost(Request $request)
    {
        personas::create($request->all());
        return view('adiospost');
    }
}
