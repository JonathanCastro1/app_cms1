
{{-- extendio el contenido de header --}}
@extends('layouts/header')
{{-- @include('layouts/header') --}}

{{-- configuro el titulo de la vista si no se extiende no se muestra --}}
@section('title', 'login')

{{-- incluyo el contenido --}}
@include('layouts/navbar')     
<!-- para comentar entre llaves es con --variable a comentar -- -->
       <!--  mostrando data del controlador -->
        <!-- <h1>Nombres es {{--$prueba--}}</h1> -->

<!-- de esta forma hago links en laravel -->
        {{--  <a href="{{ url('mostrar') }}">Mostrar</a> --}}

       {{--  <a href="{{ url('footer') }}">Footer</a>
        <a href="{{ url('login') }}">login</a> --}}
<br>
<br>
<br>




<div class="row page-header col-md-6 col-md-offset-3 "> 
    <h2 class="fas fa-briefcase">Login app cms</h2>
</div>

<div class="row col-md-6 col-md-offset-3 ">

    <form action="login/iniciarsession" method="post">
        <div class="form-group">
            <label type="hidden" id="usuarioM"></label>
            <input type="text" name="usuario" placeholder="Usuario o Email" class="form-control" id="usuario">
        </div>  
        
        <div class="form-group">
            <label type="hidden" id="contrasenaM"></label>
            <input type="password" name="contrasena" placeholder="Contraseña" class="form-control" id="contrasena">
        </div>

        <div class="form-group">
            <label type="hidden" id="confirmarCM"></label>
            <input type="password" name="confirmarContrasena" placeholder="Confirmar Contraseña" class="form-control" id="confirmarContrasena">
        </div>

        <div class="form-group">
            <button type="submit" name="submit" value="submit" class="btn-primary btn-sm glyphicon glyphicon-ok" onclick="validar(event)">Login</button>
            <button type="reset" class="btn-danger btn-sm glyphicon glyphicon-remove">Cancelar</button>
        </div>

        <div class="form-group">
            <a href="" >Olvido su Contraseña?</a>
        </div>      

    </form> 

<br>
<br>
<br>
<br>    
</div>

@include('layouts/footer')         










          

