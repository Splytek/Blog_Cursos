<?php
//CODIGO PHP

include_once 'conexion.php';

session_start();

//CONTADOR DE VISITAS
// $stmt = $conexion->prepare("UPDATE contador SET visitas=visitas+1 WHERE id='3'");
// $stmt->execute();

if(!isset($_SESSION['rol'])){ //SI ES DIEFERENTE DE "SETEADO(Valor agregado)" que lo redirija a login.php 
	header("Location: login.php");
	exit(1);
}

$userName = $_SESSION['rol']; 


?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<link rel="shortcut icon" type="image/x-icon" href="imagenes\favicon.png" />
		<title>Arduino</title>
		<link rel="stylesheet" type="text/css" href="pages\css\estilosA.css" />
	</head>
	<body>
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
					<li class="inicio">
						<a
							href="/Blog_cursos/index.php"
							>Inicio</a
						>
					</li>
					<li>
						<a href="#">Tutoriales</a>
						<ul>
							<li>
								<a href="">Tutoriales</a>
								<ul>
									<li><a href="#">Programacion</a></li>
									<li><a href="#">L. Emsamblador</a></li>
									<li><a href="#">Base de Datos</a></li>
								</ul>
							</li>
							<li><a href="#">Idiomas</a></li>
							<li><a href="#">Podcast</a></li>
						</ul>
					</li>
					<li><a href="#">Acerca de</a></li>
					<li>
						<a href="#">Contactos</a>
					</li>

                    <li>
					  <a href="#">Usuario <?php echo $userName ?> </a>
					   <ul>
                         <li>
					       <div>
						     <a href="cerrar_sesion.php">Cerrar sesion</a>
						   </div>
						 </li> 
					   </ul>
					</li>

				</ul>
			</nav>
		</header>

		<section class="main">
			<section class="articles">
				<article class="p_Arduino">

					<h2 class="subT">Arduino</h2>

					<div class="titulo-Arduino">
					<h2>¿Qué es y para qué sirve el Arduino?</h2>
				    </div>

					<br>
					<p>
						Qué es Arduino. Arduino es una plataforma de hardware libre, basada
						en una placa con un microcontrolador y un entorno de desarrollo
						(software), diseñada para facilitar el uso de la electrónica en
						proyectos multidisciplinares. Arduino es una plataforma abierta que
						facilita la programación de un microcontrolador.
						<br /><br />
						
						<h2>¿Cómo se usa el Arduino?</h2>
						
						<br>
						A su vez, estas instrucciones se escriben usando un lenguaje de programación 
						que permite al usuario establecer programas que interactúan con circuitos electrónicos. 
						El arduino es una placa que tiene todos los elementos necesarios para conectar periféricos 
						a las entradas y salidas de un microcontrolador.
						<br /><br />
						
						<h2>¿Qué es una placa Arduino?</h2>
						<br>
						Simplificando mucho una placa Arduino es un conjunto de entradas y salidas con un microcontrolador 
						entre ambas, el cual, en función de la información que recibe de las entradas y de la programación 
						introducida en él, gestiona las salidas de forma predeterminada.
						<br /><br />
						<h2>¿Qué se puede hacer con un Arduino?</h2>
						<br>
						Con Arduino podemos hacer “smart” las cosas, es decir, que se conecten a internet. Qué cosas podemos hacer: 
						twitterar, mandar correos, publicar en otras redes sociales, poner datos en tiempo real en internet o en un 
						servidor privado, compartir su estado, etc…
						<br /><br />
					</p>
					<br /><br />
					
					<iframe width="560" height="315" src="https://www.youtube.com/embed/Kgz0vD1vSxY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

				</article>
			</section>

			<aside>
				<div class="social">
				  <h1>Enero 2021</h1>
				  <!-- li*31{$} -->
				  <ol>
                    <li>1</li>
					<li>2</li>
					<li>3</li>
					<li>4</li>
					<li>5</li>
					<li>6</li>
					<li>7</li>
					<li>8</li>
					<li>9</li>
					<li>10</li>
					<li>11</li>
					<li>12</li>
					<li>13</li>
					<li>14</li>
					<li>15</li>
					<li>16</li>
					<li>17</li>
					<li>18</li>
					<li>19</li>
					<li>20</li>
					<li>21</li>
					<li>22</li>
					<li>23</li>
					<li>24</li>
					<li>25</li>
					<li>26</li>
					<li>27</li>
					<li>28</li>
					<li>29</li>
					<li>30</li>
					<li>31</li>		
				  <ol> 
			   </div>
		</section>

		<footer>
			<p>Hugo Gonzalez - Creador de la pagina</p>
		</footer>
	</body>
</html>
