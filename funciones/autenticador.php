<?php

  session_start();

  function elUsuarioEstaLogueado(){
    if(isset($_SESSION['email'])){
      return true;
    }
    return false;
  }

 ?>
