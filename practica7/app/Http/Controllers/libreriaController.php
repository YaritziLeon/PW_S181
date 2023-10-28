<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorRegistros;

class libreriaController extends Controller
{
    public function metodoInicio(){
        return view ('welcome');
    }
    public function metodoRegistro(){
        return view ('registro');
    }
    public function registrar(validadorRegistros $req){
       return redirect('/registro')->with('confirmacion','Tu registro llego');
    }
}
