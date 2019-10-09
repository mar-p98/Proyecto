<?php
  include_once('funciones/autenticador.php');
 ?>

  <header >
    <div class="encabezado">
      <img id="logo" src="img/FourBakery.png"  width="80px"alt="">

      <nav class='navbar navbar-expand-md navbar-light light-blue lighten-4' id="menu">

        <div class="w-100 text-right">
          <button class="navbar-toggler toggler-example" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
            aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="dark-blue-text">
              <i class="fas fa-bars fa-1x"></i>
            </span>
          </button>
        </div>

        <div  id="navbarSupportedContent1" class="collapse navbar-collapse menu flex-grow-1 text-right">
          <ul class='navbar-nav ml-auto flex-nowrap'>
            <li class="nav-item menuPrincipal">
              <a class="nav-link" href="index.php">INICIO</a>
            </li>
            <li class="nav-item menuPrincipal">
              <a class="nav-link" href="index.php#productos">PRODUCTOS</a>
            </li>
            <li class="nav-item menuPrincipal">
              <a class="nav-link" href="preguntasFrecuentes.php">FAQ</a>
            </li>
            <li class="nav-item menuPrincipal">
              <a class="nav-link" href="contacto.php">CONTACTO</a>
            </li>
            <li class='nav-item menuPrincipal usuario'>
              <!-- <a id=iconoPerson href="formularioLogin.php">
                <span class= 'fa fa-user-circle' width="6" height="6"></span> </a>
              </a> -->
            <?php if(!elUsuarioEstaLogueado()){ ?>
              <button class="btn" type="button" name="button" data-toggle="dropdown">
                <span class= 'fa fa-user-circle' width="6" height="6"></span>
              </button>
              <ul class="dropdown-menu" id='dropdown-ul'>
                  <li id="dropdown-login"><a href="formularioLogin.php">Inicia Sesión</a></li>
                  <li id="dropdown-login"><a href="formularioRegistro.php">Registrate</a></li>
              </ul>
            <?php } else {?>
                <button class="btn botonIconoUser" type="button" name="button" data-toggle="dropdown">
                  <span class= 'fa fa-user-circle' width="6" height="6"></span>
                  <span class='nombreUsuario'> <?php echo $_SESSION['nombre']; ?> </span>
                </button>
                <ul class="dropdown-menu" id='dropdown-ul'>
                  <li id="dropdown-login"><a href="miPerfil.php">Mi Perfil</a></li>
                  <li id="dropdown-login">
                    <form class="" action="cerrarSesión.php" method="post">
                      <button type="submit" name="button" class='botonLogout'> Cerrar Sesión</button>
                    </form>
                  </li>
                </ul>
              <?php } ?>

            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
