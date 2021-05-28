<?php

include_once 'conexion.php';


//El metodo $_POST regresa todo el conjunto de datos obtenido del formulario y debemos ingresar a ellos con la varaible global $_POST y definir entre corchetes a que valor queremos acceder(como si fuera un arreglo)

//CODNICONAL PARA VER SI TIENE VALORES(SETEADO) LA VARIABLE $_POST

if( isset($_POST['username']) && isset($_POST['password']) ){

  $username = $_POST['username'];
  $password = $_POST['password'];

  $stmt = $conexion->prepare("INSERT INTO usuarios(id, username, password, rol_id) 
  VALUES(null, 
  :username, 
  :password, 2)"
  );

  $stmt->execute(array(
  ':username' => $username, 
  ':password' => $password)
  );

} /* else{

  // header("Location: new_regsiter.php");
  echo "No";
} */

?>


<!DOCTYPE html>
  <html>
    <head>
 
    <meta charset="utf-8">
    <link rel="stylesheet" href="css\estilos_registro.css">
    <title>Inicio de Sesion</title>
 
  </head>
    <body>

<div class="slearning"><h1>SLearning</h1></div>
<div class="login">
<div class="titulo_login"><h2>Registro</h2></div>
<!-- action="#" apunta a el mismo archivo[login.php], porque aqui mismo vamos incluir la validacion -->
  <form action="#" method="POST">
    
    <div class="contenido">
    <label>Usuario:</label> 
    <br><input type="text" name="username" required></br> 
    <label>Contraseña</label>
    <br><input type="text" name="password" required></br>
    <input type="submit" value="Registrarse">
    <!-- VALUE muestra el valor de input:submit -->
    </div>
    <div class="crear_cuenta"><a href="login.php">Regresar a Inicio</a><div>

    <!--  -->

  </form> 
 </div>

</body>