<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

// en este ejemplo estoy importando
// use Illuminate\Database\Eloquent\SoftDeletes;

class Login_model extends Model
{

	// y en este otro ejemplo lo llamo,para poder usarlo en la clase
	// use SoftDeletes;


	// ahy que colocar el nombre de la tabla si es diferente a la clase del modelo
	// por ejemplo $table son propiedades que ya vienen en la clase model
	// entonces lo que hago es extenderla y establecer el valor
	protected $table = 'usuarios';

    // por ejemplo todos los metodos find(1) etc
    // todos ellos buscan el id por defecto establecido en la tabla
    // si no hay q ser especifico,poner condiciones where()->update() etc
	// protected $primaryKey = 'id_usuarios';


    //  public function mostrar()
    // {      	
    // 	 // $resultados = DB::select('select id,nombre from usuarios');

    // 	 $resultados = DB::select('select * from usuarios where id = ?', [1]);

  		//  return $resultados;
    // }

  
}
