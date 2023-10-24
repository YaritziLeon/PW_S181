<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormRecuerdos;

class diarioController extends Controller
{
    public function metodoInicio(){
        return view('welcome');
    }
    public function metodoFormulario(){
        return view('formulario');
    }
    public function metodoRecuerdos(){
        return view('recuerdos');
    }
    public function guardarRecuerdo(validadorFormRecuerdos $req){

        /* $validated = $req->validate([
        'txtTitulo' => 'required|max:25',
        'txtRecuerdos' => 'required|min:4',
    ]); */

        return redirect('/form')->with('confirmacion','Tu recuerdo llego al controlador');

        /* echo "<p>";
        echo $req->ip();
        echo " - ";
        echo $req->path();
        echo " - ";
        echo $req->method();
        echo " - ";
        echo $req->input('txtTitulo');
        echo " - ";
        echo $req->url();
        echo "</p>"; */
    }
}
