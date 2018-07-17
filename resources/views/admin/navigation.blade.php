<br>
<br>
<nav class="navbar navbar-default">
  <div class="container-fluid">  	
    
    <ul class="nav navbar-nav">
     {{--  laravel acepta las dos formas con los href --}}
     {{--  <li><a href="dashboard" class="fas fa-tachometer-alt">Dashboard</a></li> --}}        
      <li><a href="{{ url('dashboard') }}" class="fas fa-tachometer-alt">Dashboard</a></li>
      <li><a href="{{ url('usuarios') }}" class="fas fa-users">Usuarios</a></li>
      <li><a href="{{ url('reportes') }}" class="fas fa-file-pdf">Reportes</a></li>     
      <li><a href="{{ url('comentarios') }}" class="fas fa-comments">Comentarios</a></li>
    </ul>
  </div>
</nav>
