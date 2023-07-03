<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fichier1controller extends Controller
{
    //
    public function method1(){
        return 'ceci est le method1';
    }

    public function method2(){
        return 'coucou saint esprit';
    }
    public function acceuil(){
        return view('acceuil');
    }
}
