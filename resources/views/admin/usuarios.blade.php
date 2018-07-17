@extends('layouts/header')

@section('title', 'usuarios')

@include('admin/navbar')

@include('admin/navigation')  

	<div class="row col-md-6 col-md-offset-1">

		<div class="page-header">
  			<h1>Admin Usuarios <small>App cms</small></h1>
		</div>

		<div>
			<a href="usuarios/agregar" ><span class="btn-success btn-xs glyphicon glyphicon-plus" data-toggle="modal"  id="">Agregar</span></a>

			<a  href="usuarios/reporteUPdf"><span class="btn-danger  btn-xs glyphicon glyphicon-file">PDF</span></a>

			<a  href="usuarios/reporteUExcel"><span class="btn-warning  btn-xs glyphicon glyphicon-download-alt">XLS</span></a>			
		</div>

		<br>

		<table id="tabla" class="table-responsive table-hover table-bordered" > 

		 
												
	                    <thead>
	                        <tr>
	                        	<th >#</th>	                        	
	                        	<th >Nombre</th>
	                            <th >Apellido</th>	 
	                            <th >Registrado</th>
	                            <th >Email</th>
	                            <th >Estado</th>
	                            <th >Capital</th>
	                            <th >Parroquia</th>	 	                           
	                            <th >Usuario</th>
	                            <th >Role</th>
	                            <th >Acciones</th>           
			                 </tr>
			               </thead>

			 <tbody>
			
 		@foreach($datoss as $dato)
		
		<tr>
		<td>{{$dato->id }}</td>		
		<td>{{$dato->nombre }}</td>
		<td>{{$dato->apellido}}</td>
		<td>{{$dato->fecha}}</td>
		<td>{{$dato->email}}</td>
		<td>{{$dato->estado}}</td>
		<td>{{$dato->capital}}</td>
		<td>{{$dato->parroquia}}</td>
		<td>{{$dato->usuario}}</td>
		<td>{{$dato->role}}</td>			
		<td >
		<!-- El id tiene que mostrarse en le tabla, si no no funcionan los metodos de ver,editar,eliminar -->
		 <a  href="usuarios/ver/$dato->id" ><span class="btn-primary btn-xs glyphicon glyphicon-zoom-in" data-toggle="ver" title="Ver"></span></a>
		
		
		 <a  href="usuarios/editar/$dato->id" ><span class="btn-success btn-xs glyphicon glyphicon-pencil" data-toggle="editar" title="Editar"></span></a>
		
		
		 <a id="eliminar"  href="usuarios/eliminar/$dato->id" ><span class="btn-danger btn-xs glyphicon glyphicon-trash" data-toggle="eliminar" title="Eliminar"></span></a>
		</td>

		</tr>

	   @endforeach

	</tbody>

</table>

<br>
<br>
<br>

</div>

@include('layouts/footer')  
