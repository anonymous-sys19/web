
<?php


  if(isset($_POST["registrar"])) {

    $name=trim($_POST["name"]);
    $email=trim($_POST["email"]);

    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1) { 

      $file= fopen('datosReguistrados.txt', 'a+') or die ('A ocurrido un error no encontre la base de datos .. ');

      $nombreDeUsuario= trim($_REQUEST['name']);
      $correoEmail= trim($_REQUEST['email']);
      fwrite($file, 'Nombre completo: ');
      fwrite($file, $nombreDeUsuario);
      fwrite($file, "\n");
      fwrite($file, 'Correo electronico: ');
      fwrite($file, $correoEmail);
      fwrite($file, "\n");
      fwrite($file, '===========================');
      fwrite($file, "\n");

      ?>
      <script src="style.js"></script>
      <?php
    } else {

      ?> 
	      <h3 class="ok">¡Por favor complete los campos!</h3>
      <?php

    }
    
    
  }
?>