<?php

include_once 'conexion.php';
//require_once('#');

  session_start();
  //va mos ponerle un (!) SINO EXISTE UNA SESSION($_SESSION) iniciada que se llame "rol" no tendremos acceso al index.php y redirigir al login.php
 
  //SENTENCIA(CONSULTA) Y EJECUCION PARA CONTAR LA VISITAS QUE SE HAN HECHO A PAGINAS ESPECIFICAS
/*  $query = $conexion->prepare("UPDATE contador SET visitas=visitas+1 WHERE id = 2"); //PREPARAMOS LA EJECUCION
  $query->execute(); */

 
  if(!isset($_SESSION['rol'])){
    header('location: login.php');
  } /* else { //SI EXISTE LA SESION TENGO VALIDAR EL "rol" seleccionado ya sea "admin o usuario"
    if($_SESSION['rol'] != 1) //la SESION debe ser a igual "1" si quiere ingresar como ADMIN,, pero si diferente de "1" sera redirigido para a login.php para que inicie sesion como usuario
    header('location: login.php');
  } */

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<meta charset="utf-8" />
		<title>SLearning</title>
		<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
		<link rel="shortcut icon" type="image/x-icon" href="imagenes/favicon.ico" />
		<!--poner un hoja de estilo .CSS con la etiqueta 
    <style type=""></style>-->
	</head>
	<body background="imagenes\wallpaper.jpg">
		<!-- El sitio web se basa en 3 areas
         1. HEADER
          2. MAIN/MAIN PRINCIPAL (ARTICULOS Y SIDEBAR)
           3. FOOTER (PIE DE PAGINA)-->

		<header>
			<!-- adentro de "header" queremos dentro tanto el logotipo como el menu -->
			<div>
				<img src="https://i.ibb.co/d0r5Scw/log.png" alt="">
			</div>


			<nav>
				<!-- dentro de "header con la etiqueta ".NAV" encerramos nuestro menu de navegacion -->
				<!-- con esto le decimos a los navegadores que esta es la parte de navegacion del sitio -->
				<!-- nuestro MENU consta de listas tr*5>td{item #$}*5 "esto es un atajo" -->
				<ul class="nav1">
					<li><a href="#">Inicio</a></li>
					<li>
						<a href="#">Tutoriales</a>
						<ul>
							<li>
								<a href="">Cursos</a>
								<ul>
									<li>
										<a href="arduino.php" >Arduino</a> 
										<!-- target="_blank" -->
									</li>
									<li><a href="pages/programacionCmm.html">Programacion</a></li>
									<li><a href="#">L. Ensamblador</a></li>
									<li><a href="#">Base de Datos</a></li>
								</ul>
							</li>
							<li><a href="#">Idiomas</a>
								<ul>
									<li><a href="#">Ingles</a></li>
									<li><a href="#">Frances</a></li>
									<li><a href="#">Aleman</a></li>
								</ul>
							</li>
							<li><a href="#">Podcast</a></li>
						</ul>
					</li>
					<li><a href="pages/acercade.html">Acerca de</a></li>
					<li><a href="pages/contacto.html">Contacto</a></li>
					
					<li><a href="#">Usuario </a>


					  <ul>
                        <li>
					      <div>
						    <a href="cerrar_sesion.php">Cerrar sesion</a>
						  </div>
						</li> 
					  </ul>
					</li>

				</ul>
				<!--<div class="search">
					<form action="">
						<input type="text" placeholder="Buscar..." />
						<button class="boton" type="submit"></button>
					</form>
				</div>-->
			</nav>
		</header>

		<!-- no existe una clase "MAIN" asi que agregamos un section con la clase "main" <section class="main"> </section> -->
		<section class="main">
			<!-- TAMAÑO DE NUESTRO DOCUMENTO QUE ABARCA LOS ARTICULOS Y EL SIDEBAR -->
			<!-- agregaremos otro "section" para agregar nuestros articulos -->
			<!-- section.articles "es un atajo para la class en section" -->

			<section class="articles">
				<article class="articulo1">
					<!-- este "article" decimos a los navegadores que este es nuestro contenido principal que queremos que el usuario vea -->
					<!-- vamos a tener varios ARTICULOS "ARTICLES" usaremos el "h2" en cada uno-->
					<a href="arduino.php"><h2>¿Qué es un Arduino?</h2></a>

					<!-- agregamos contenido de relleno para simular que tenemos algo de texto-->
					<img
						class="imgArduino"
						src="imagenes\arduino.jpg"
						alt=""
					/>
					<p class="parrafo1">
						Aquí veremos desde los aspectos más básicos, como entradas y salidas
						analógicas o digitales, accionar motores DC, paso a paso y servo
						motores, o adquirir datos y sensores, hasta proyectos avanzados
						donde veremos cómo montar redes sensoriales, registro de datos, uso
						combinado con un PC, Android o Raspberry Pi, o aplicaciones en
						robótica.
					</p>
				</article>

				<article>
					<a href="https://es.wikipedia.org/wiki/Lenguaje_ensamblador#:~:text=El%20lenguaje%20ensamblador%20o%20assembly,y%20otros%20circuitos%20integrados%20programables." target="_blank"
						><h2>¿Qué es una Base de Datos?</h2></a
					>
					<img src="imagenes\bd.jpg" class="imgBD" alt="" />
					<p class="parrafo2">
						Una base de datos es un conjunto de datos pertenecientes a un mismo contexto y almacenados sistemáticamente para su posterior uso. En este sentido; una biblioteca puede considerarse una base de datos compuesta en su mayoría por documentos y textos impresos en papel e indexados para su consulta.
					</p>
				</article>
				<article>
					<a href="pages/arduino.html" target="_blank"
					><h2>Lenguaje Ensamblador</h2></a
				>
				<!-- agregamos contenido de relleno para simular que tenemos algo de texto-->
				<img
					class="imgArduino"
					src="imagenes\ensamblador.png"
				/>
				<p class="parrafo1">
					El lenguaje ensamblador o assembly (en inglés: assembly language y la abreviación asm) es un lenguaje de programación de bajo nivel. Consiste en un conjunto de mnemónicos que representan instrucciones básicas para los computadores, microprocesadores, microcontroladores y otros circuitos integrados programables.
				</p> 
				</article>
				<article>
					<a href="C:\Users\Hugo\Downloads\Universidad\Redes de Computadoras & Programacion Web\public_html\pages\programacionCmm.html" target="_blank"
					><h2>Curso de Programacion Basica</h2></a
				>
				<!-- agregamos contenido de relleno para simular que tenemos algo de texto-->
				<img
					class="imgArduino"
					src="imagenes\programacion.jpg"
				/>
				<p class="parrafo1">
					C++ es un lenguaje de programación diseñado en 1979 por Bjarne Stroustrup. La intención de su creación fue extender al lenguaje de programación C mecanismos que permiten la manipulación de objetos. En ese sentido, desde el punto de vista de los lenguajes orientados a objetos, C++ es un lenguaje híbrido. 
				</p>
			</section>
			<!-- dentro de nuestro "MAIN" tambien pondremos nuestro "ASIDE o SIDEBAR"-->
			<aside>
               <div class="social">
				
					<a href="https://www.facebook.com/hugoemmanuel.gonzalezgomez.96/"  target="_blank" ><img src="imagenes\facebook.png" class="net"></a>
					<img src="imagenes\twitter.png" class="net">
					<a href="https://www.youtube.com/channel/UCs59Ju1adGpc0FJhOGdYVPg?view_as=subscriber"><img src="imagenes\youtube.png" class="net"></a>
					<a href="https://www.instagram.com/hugh.gonzalez.96/?hl=es-la" target="_blank"><img src="imagenes\instagram.png" class="net"></a>
					<img src="imagenes\whatsapp.png" class="net">
					<img src="imagenes\twitch.jpg" class="net">
				
			   </div>
			</aside>
              
			<form method="POST">
				<h3 class="sugerencia">Sugerencias:</h3>
				<label for="nombre">Nombre: </label>
				<input
					type="text"
					name="name"
					placeholder="Escribe tu nombre"
					
				/>
				<label for="email">E-mail: </label>
				<input
					type="email"
					name="email"
					placeholder="Escribe tu correo"
					
				/>
				<label for="edad">Edad:</label>
				<input type="number" name="edad" placeholder="Introduce tu edad: " />
				
				<label for="mensaje">Mensaje: </label>
				<textarea
					name="mensaje"
					placeholder="Escribe un mensaje..."
					
				></textarea>
				<input type="submit" name="enviar" value="Enviar" />
            </form>
            <?php
            include 'registro.php';
            ?>


        </section>


		<footer>
			<p>Hugo Gonzalez - Creador de la pagina</p>
		</footer>
	</body>
</html>
