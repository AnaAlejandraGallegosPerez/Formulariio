<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebasController extends Controller
{
    public function verificar(Request $request){
        $user = $request -> input('user');
        $pass = $request -> input('pass');

        if ( $user == 'GALLEGOSPEREZ' && $pass == 'GALLEGOS'){
            $url = 'correcto';
        } else {
           $url= 'incorrecto';
        }
        return view ($url, [
            'user' => $request -> input('user')
        ]);
    }


    public function login(){
        return view('crud');
    } //
}