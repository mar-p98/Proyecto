<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto</title>
  <link rel="stylesheet" href="css/contacto.css">
  <link rel="stylesheet" href="css/font-awesome.css">



</head>

<body>

  <header>
    <?php include("encabezado.php"); ?>
  </header>

  <main id="contactanos">

    <form  action="" class="form_contact">
     <h2>Envia un mensaje</h2>
      <div class="user_info">
       <input type="text" name="Nombre" placeholder="Nombre">
       <input type="text" name="Correo" placeholder="Correo">
       <input type="text" name="Telefono" placeholder="Teléfono">
       <textarea name="Mensaje" rows="5" cols="80"placeholder="Escriba aquí su mensaje"></textarea>
       <input type="button" value="Enviar" id="boton">
       </div>
    </form>
    <section class="info_items">
        <p><span class="fa fa-envelope"></span> info.contact@gmail.com</p>
        <p><span class="fa fa-mobile"></span> +54 9(11) 000-000</p>
    </section>


</main>

<footer>
   <?php include("pieDePagina.php"); ?>
 </footer>

</body>
</html>
