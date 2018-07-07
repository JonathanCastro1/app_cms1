<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login extends Controller
{
    public function index()
    {    	
    	return view('login');
    }



    

    // public function index()
    // {    
    // 	$prueba="jonathan";
    // 	// le paso la variable a la vista	
    // 	return view('login',compact('prueba'));
    // }


    public function mostrar()
    {    	
    	echo "mostrando algo";
    }



}
