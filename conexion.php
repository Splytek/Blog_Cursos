<?php 
//conectar a la base de datos
//creamos una variable para guardar la $conexion

//CONEXION A LA BASE DE DATOS
//$conexion = mysqli_connect("localhost", "root", "", "blog_cursos"); //esto tiene 4 parametros //1. localhost 2.root 3. no tiene constraseña 4.base de datos que queremos seleccionar o conectar

//2DA FORMA CON PDO
try{
$conexion = new PDO('mysql:host=localhost:3307;dbname=blog_cursos', 'root', '');
  //echo "Conexion exitosa"; //MOSTRAR EN PANTALLA SI LA CONEXION FUE EXITOSA
}catch(PDOException $e){
  echo "Error: " . $e->getMessage();
}



//COMPROBACION DE LA CONEXION A LA SGBD
/* if($conexion){
    //echo "Conexion exitosa";
} else {
    //echo "Error al conectar";
}
 */
?>