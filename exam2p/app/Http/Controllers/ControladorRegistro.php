<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorRegistro extends Controller
{
    public function registro(){
        return view ('welcome');
    } 
    public function VideoJuego(Request $req){
        $validated = $req->validate([
        'txtNombre' => 'required|min:5',
        'Fecha' => 'required',
        'Vendidos' => 'required|max:7',        
        ]);
        return redirect('/')->with('confirmacion','Tu registro llego');
 
    }
}
