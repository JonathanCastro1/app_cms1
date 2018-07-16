<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\login_model;


// use \App\Article::all();

class Usuarios extends Controller
{
    public function index()
    {    

    	// return view('admin/usuarios');
        // $datoss = ['id=>1','nombre=>pedro'];
        $datoss = Login_model::all();
        return view('admin/usuarios',compact('datoss'));
    	
    }



    

    // public function index()
    // {    
    // 	$prueba="jonathan";
    // 	// le paso la variable a la vista	
    // 	return view('login',compact('prueba'));
    // }


    // public function mostrar()
    // {    	
    // 	echo "mostrando algo";
    // }

    // public function footer()
    // {    	
    // 	return view('layouts/footer');
    // }  


}
