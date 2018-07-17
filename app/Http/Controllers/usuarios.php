<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// con esto accedemos a todos los metodos,propiedades,etc, de la clase
// osea lo esta importando
use App\login_model;


// use \App\Article::all();

class Usuarios extends Controller
{
    public function index()
    {    
    	
        $datoss = login_model::all();

        // esta funcion es de laravel es como var_dump
        // dd($datoss);

        // el tipico var_dump
        // var_dump($datoss);

        // probando recibir data en el controlador
        // foreach ($datoss as $dato) {
        //     return $dato->nombre;
        // }

        // le paso la data a la vista,que recibo del modelo
        return view('admin/usuarios',compact('datoss'));
    	
    }

    public function dashboard()
    {         
        return view('admin/dashboard');
        
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
