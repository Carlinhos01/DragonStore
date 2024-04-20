<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    public function showHome(){
        return view('home');
    }
    
    public function showCadFuncio(Request $request){
        return view ("cadastroClie");
    }

    public function cadFuncio(Request $request){
        $dadosValidos = $request-> validate([
            'nome' => 'string|required',
            'email' => 'string|required',
            'fone' => 'string|required'
        ]);

        cliente::create($dadosValidos);
        return view("home");
    }
}
