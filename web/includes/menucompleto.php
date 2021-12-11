<div class="d-flex toggled" id="wrapper">

<!-- Sidebar -->
<div class="border-right color-block-5 blue-gradient" id="sidebar-wrapper">
  <div class="sidebar-heading"><strong>HORARIOS ACADEMICOS</strong></div>
    <div class="list-group list-group-flush ">

        <li class="nav-item dropdown " v-show='usuario==1' >              
          <a href="#" class="list-group-item list-group-item-action color-block-5" disabled  data-toggle="dropdown">Usuarios</a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="registro.php" >Nuevo</a>
                  <a class="dropdown-item" href="buscar.php">Listar/Modificar/Borrar</a>
            </div>
        </li>
        <li class="nav-item dropdown" v-show='usuario==1' >              
          <a href="#" class="list-group-item list-group-item-action color-block-5" disabled data-toggle="dropdown">Reservar</a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="registro.php" >Nuevo</a>
                  <a class="dropdown-item" href="buscar.php">Listar/Modificar/Borrar</a>
            </div>
        </li>
       
          <a href="../login/salir.php" class="list-group-item list-group-item-action color-block-5">Salir</a>
  </div>
</div>
<!-- /#sidebar-wrapper -->

<!-- Page Content -->
<div id="page-content-wrapper">

  <nav class="navbar navbar-expand-lg navbar-light border-bottom pr-5">
    <button class="btn blue-gradient btn-pr" id="menu-toggle"><i class="fas fa-bars"></i></button>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse pr-5" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
   
        <li class="nav-item dropdown" v-show='usuario==1'>
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Usuarios<span class="sr-only">(current)</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="registro.php">Nuevo</a>
            <a class="dropdown-item" href="buscar.php">Listar/Modificar/Borar</a>
          </div>
    
        </li>
        <li class="nav-item dropdown pl-2" v-show='usuario==1'>        
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Reservar
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="registro.php">Nuevo</a>
            <a class="dropdown-item" href="buscar.php">Listar/Modificar/Borar</a>
          </div>
        </li>


        <li class="nav-item pr-5 pl-2">
          <a class="nav-link" href="../login/salir.php">Salir</a>
        </li> 
      </ul>
    </div>
  </nav>


