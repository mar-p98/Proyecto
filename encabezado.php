<?php
  include_once('funciones/autenticador.php');
 ?>

  <header >
    <div class="encabezado">
      <img id="logo" src="img/FourBakery.png"  width="80px"alt="">

      <div id="menu">
        <ul>
          <li class="menuPrincipal">
            <a href="index.php">INICIO</a>
          </li>
          <li class="menuPrincipal">
            <a href="index.php#productos">PRODUCTOS</a>
          </li>
          <li class="menuPrincipal">
            <a href="preguntasFrecuentes.php">FAQ</a>

          </li>
          <li class="menuPrincipal">
            <a href="contacto.php">CONTACTO</a>
          </li>
          <li class='menuPrincipal usuario'>
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
    </div>
  </header>
