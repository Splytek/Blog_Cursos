<?php
//TRAEMOS LA CONEXION AL SGBD
include_once 'conexion.php';

//VAMOS UTILIZAR SESIONES
session_start();

//CERRAR SESION con el metodo $_GET[](variable global)
// if(isset($_GET['cerrar_sesion'])){
// //SI EXISTE CERRA SESION
// //CERRAMOS SESION CON session_unset();
//   session_unset();
//   session_destroy();

// }

//SENTENCIA(CONSULTA) Y EJECUCION PARA CONTAR LA VISITAS QUE SE HAN HECHO A PAGINAS ESPECIFICAS
/* $query = $conexion->prepare("UPDATE contador SET visitas=visitas+1 WHERE id = 1"); //PREPARAMOS LA EJECUCION
$query->execute(); //EJECUTAMOS LA SENTENCIA(CONSULTA) */

/* //SESION DE ERROR
if(isset($_SESSION['rol'])){ //Mi sesion se va identificar con "rol"
//SI EXISTE EL "rol" ponemos un SWITCH para verificar quien inicio sesion [admin o usuario]
  switch($_SESSION['rol']){
      case 1: //case 1, si es un administrador
        header('location: index.php');//redireccionamos a la pagina index.php
      break;

      case 2: //case 2, si es un usuario
        header('location: index.php');
      break;

      default:

      break;
  }
} */

//AUTENTICAR UN USUARIO
if(isset($_POST['username']) && isset($_POST['password']) ){ //VOY A VALIDAR SI EXISTE EL NOMBRE Y CONTRASEÑA
$username = $_POST['username'];
$password = $_POST['password'];

  //VAMOS HACER LA CONEXION A LA BD
  //$db = new Database();
  //PREPARAMOS LA SENTENCIA Y HACER LA CONSULTA HACIA LA BD
  //CREAMOS VARIABLE TEMPORALES(PLACEHOLDERS (:username y :password)) que van a recibir los valores y hacer la consulta
  $query = $conexion->prepare("SELECT * FROM usuarios WHERE username = :username or password = :password");
  //EJECUTAMOS LA COSNULTA con el metodo EXECUTE
  //Incluimos nuestro PLACEHOLERS en arreglo(que es el parametro que recibe EXECUTE) que sera igualados a los datos recibidos por el admin o usuario
  //ESTE METODO SOLO ME VA A TRAER LOS DATOS
  $query->execute(array(':username' => $username, ':password' => $password));

  //$row = $query->fetch(); //ME LO TRANSFORMA EN UN ARREGLO LOS DATOS TRAIDOS DE LA BD para luego acceder a ellos con sus identifIcadores
  $row = $query->fetch();
  //print_r($row);

  //COMPROBAMOS SI HAY DATOS en la varaible $row de tipo arreglo que traje por medio de fecthAll();
  if($row == true){ //SI $row es igual TRUE significa que HAY DATOS SE EJECUTA con valor booleano
    //VALIDAR EL ROL
    //Igualar el valor(dato traido de la BD) de $row a la variable $rol para que pueda los otros condicionales redireccionar 
    $rol = $row[3]; //ACCEDER A SUS MEDIANTE INDICES(0,1,2) O INDENTIFICADORES(id, nombre, password)
                    //el 3 pertenece a la columna 3 que seria siendo la columna "rol_id", se accede mediante arreglo[3] o arreglo[rol_id]
                    //con esto tengo el valor del $rol
                    //la variable $rol debemos asignarlo a nuestra variable global $_SESSION
    $_SESSION['rol'] = $rol; //Sesion con su identificador 'rol' es igual a la "variable $rol" (con su valor ya obtenido)

    //print_r($row); //COMPROBAMOS EL VALOR DE la varaible $row (arreglo)

    //PONEMOS UN SWITCH
    //Dependiendo del rol me va redireccionar a la pagina correspodniente 
    //EVALUAMOS el "rol" con el que se identifica el usuario
    switch($_SESSION['rol']){
              case 1: //case 1, si es un administrador
                header('location: index.php');//redireccionamos a la pagina index.php
              break;
        
              case 2: //case 2, si es un usuario
                header('location: index.php');
              break;
        
              default:
        
              break;
    }

  } else {
    //DECIR QUE NO EXISTE EL ROL
    //no pudo encontrar el MATCH con el usuario y el password que intentaba ingresar
    echo "El usuario y contraseña no existe";
    
  }

  //CERRAR SESION
  //PARA CERRAR SESION debemos escribir este codigo (inyectar) por medio del metodo $_GET (variable global)
  // ---->    /login.php?cerrar_sesion=1

}

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css\estilos_logReg.css">
    <title>Inicio de Sesion</title>
  </head>
  <body>

  <div class="slearning"><h1>SLearning</h1></div>

  <div class="login">
  <div class="titulo_login"><h2>Inicio de Sesion</h2></div>
  <!-- action="#" apunta a el mismo archivo[login.php], porque aqui mismo vamos incluir la validacion -->
    <form action="#" method="POST">
      
      <div class="contenido">
      <label>Usuario:</label> 
      <br><input type="text" name="username" required></br> 
      <label>Contraseña:</label> 
      <br><input type="text" name="password" required></br>
      <input type="submit" value="Iniciar sesion">
      </div>

      <div class="crear_cuenta"><a href="new_register.php">Crear cuenta</a><div>

    </form> 
   </div>

  </body>
</html>