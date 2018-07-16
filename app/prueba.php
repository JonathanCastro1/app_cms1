<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prueba extends Model
{
     public function mostrar()
    {    	
    	
    	 // $resultados = DB::select('select id,nombre from usuarios');

    	  $resultados = DB::select('select * from usuarios where id = ?', [1]);

  		 return $resultados;
    }
}
