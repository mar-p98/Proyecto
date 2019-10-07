<?php

  session_start();

  session_destroy();
  setcookie('email', '', time()-1);
  setcookie('nombre', '', time()-1);
  setcookie('telefono', '', time()-1);
  setcookie('avatar', '', time()-1);
  setcookie('id', '', time()-1);
  setcookie('admin', '', time()-1);


  header('location: index.php');

 ?>
