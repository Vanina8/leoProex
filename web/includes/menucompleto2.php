
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark container_fluid" style="height:100%">
<a href="#" data-target="slide-out" class="sidenav-trigger show-on-large white-text"><i class="material-icons">menu</i></a>
  <a class="navbar-brand" href="#"><strong>LeoProex RESERVAS</strong></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

    <li class="nav-item dropdown" v-show='usuario==1'>

          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >Usuarios</span>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="registrar_usuario.php">Nuevo</a>
            <a class="dropdown-item" href="listar_usuarios.php">Listar/Modificar/Borar</a>
          </div>
    
        </li>
        <li class="nav-item dropdown" v-show='usuario==1'>        
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Reservar
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="registro.php">Nuevo</a>
            <a class="dropdown-item" href="reserva.php">Listar/Modificar/Borar</a>
          </div>
        </li>


        <li class="nav-item pr-5 pl-2">
          <a class="nav-link" href="../login/salir.php">Salir</a>
        </li>

    </ul>
 
  </div>
</nav>

<!-- SideNav -->
<ul id="slide-out" class="sidenav bg-dark">

    <li><div class="user-view bg-dark">
      <div class="sidebar-heading"> <strong class="white-text"><h1>LeoProex RESERVAS</h1></strong>
    
      </div>
      <!-- <a href="#user"><img class="circle" src="https://loremframework.altervista.org/img/2.jpg"></a> -->
      <a href="#name"><span class="white-text name">{{nombre}}</span></a>
      <a href="#email"><span class="white-text email">{{rol}}</span></a>
    </div>
  </li>
    <li>
        <!-- <a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a> -->
        <a href="#" class="list-group-item list-group-item-action color-block-5" disabled  data-toggle="dropdown">Usuarios</a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="registrar_usuario_.php" >Nuevo</a>
                  <a class="dropdown-item" href="listar_usuarios.php">Listar/Modificar/Borrar</a>
            </div>


    </li>
    <li>
        <!-- <a href="#!">Second Link</a> -->

        <a href="#" class="list-group-item list-group-item-action color-block-5" disabled data-toggle="dropdown">Reservar</a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="registro.php" >Nuevo</a>
                  <a class="dropdown-item" href="reserva.php">Listar/Modificar/Borrar</a>
            </div>
    </li>
    <li>
            <a href="../login/salir.php" class="list-group-item list-group-item-action color-block-5">Salir</a>
    </li>
  </ul>
</header>