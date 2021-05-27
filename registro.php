<?php 

include ("conexion.php");

if (isset ($_POST['enviar'])){ //si se presiono el boton, validamos la condicion
                               //Si esta seteado(tiene valor agregado) la condicion se cumple
    if(strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1){ //Verificamos si escribio el "nombre" y "email" con mas de 1 caracter, sino no se cumple la funcion
                               //"strlen": la funcion sirve para contar el número de letras que tiene una cadena de caracteres
      $name = trim ($_POST ['name']);  //trim: Elimina los espacios en blanco u otros caracteres al inicio y final de una cadena.
      $email = trim ($_POST ['email']);  
      $edad = trim ($_POST ['edad']);
      $mensaje = trim ($_POST ['mensaje']);

      
      //ESPECIFICAMOS LO DATOS QUE VAMOS ENVIAR A LA BD
      $stmt = $conexion->prepare("INSERT INTO formulario (id, nombre, email, edad, mensaje) VALUES (null, '$name', '$email', '$edad', '$mensaje')");
      $stmt->execute(); //EJECUTAMOS LA CONSULTA

      if ($stmt) { //VALIDAMOS LOS DATOS CONSULTA
  ?>
        <h3 class="ok">¡ Has enviado correctamente tu informacion !</h3><br><br>
  <?php
        } else{
  ?>
          <h3 class="bad">Ups! ha ocurrido un error</h3>
  <?php
        }
     } else {
  ?>
      <h3 class="bad">¡ Porfavor complete los campos !</h3>
  <?php
     }
  }

?>