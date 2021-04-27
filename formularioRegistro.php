<!DOCTYPE HTML>
<!--
	Hyperspace by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>No falles, asiste.</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="main.css" />
	<link rel="stylesheet" href="REGISTRO.css">
	<noscript>
		<link rel="stylesheet" href="noscript.css" /></noscript>
</head>

<body class="is-preload">

	<!-- Header -->
	<header id="header">
		<a href="index.html" class="title">No falles, asiste.</a>
		<nav>
			<ul>
				<li><a href="index.html">Cerrar sesión</a></li>
				<li><a href="generic.html" class="active">¿Necesitas ayuda?</a></li>

			</ul>
		</nav>
	</header>

		
	<!-- Wrapper -->
	<div id="wrapper">
		<h1 class="major">
			<center>La puntualidad es la clave del éxito
		</h1>
		<div class="titulo-formulario">

			<!-- MENU DE FORMULARIO CSS-->

			<div class="registro">
					
			 <h2>Registro de usuario nuevo:</h2></br> </br>
				<form class="formulario" method="post" action="registrar.php" >

					

							<div class="cards">
								<div class="card1-titulo">
									<h3>Nombre:</h3>
									<input type="text" name="Nombre"> </br>
								</div>
								<div class="card1-input">
									<h3>Apellido:</h3>
									<input type="text" name="Apellido" ></br>
								</div>
							</div>

				<div class="cards">	
					<div class="card1-titulo">
						<h3>numero de doumento de identidad:</h3>
						<input type="text" name="nroDocumento" ></br>
					</div>
					
					<div class="card1-lista">
						<select name="tipoDocumento"  class="select">

							<!-- Opciones de la lista -->
							<option name="tipoDocumento"  selected>Seleccione un tipo de documento</option> <!-- Opción por defecto -->
							<option value="2">Tarjeta de identidad</option>
							<option value="1">Cedula de ciudadanía</option>
							<option value="3">Cedula de Extranjería</option>
							<option value="4">Pasaporte</option>
						
						</select>

					</div>
			
		

				</div>

				<div class="cards1">
					<div class="card1-titulo">

						<h3>ficha:</h3>
						<input type="text" name="nroFicha" value=""><br>
						<br>
						<h3>Dirección: </h3>
						<input type="text" name="correo">

					</div>
					
					<div class="card1-lista">
						
						<select name="rol" class="select">

							<!-- Opciones de la lista -->
							<option name="rol" selected >Seleccione un tipo de rol</option> <!-- Opción por defecto -->
							<option value="1" >Instructor</option>
							<option value="2" >Aprendiz</option>
							<option value="3">Vocero</option>
							<option value="4" >Administrador</option>
						</select>
						<br>
						<h3>contraseña: </h3>
							<input type="password" name="contraseña">
						</div>

						<input type="submit" name="register" > <br><br>
				</form>

						
						
				
						

				
				
			</div>
		</div>
	</div>
		<!-- Footer -->
		<footer id="footer" class="wrapper alt">
			<div class="inner">
				<ul class="menu">
					<li>&copy; No Falles, asiste. All rights reserved.</li>
					<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
				</ul>
			</div>
		</footer>

		<!-- Scripts 
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>

	<?php 
    include("registrar.php");
?>-->


</body>

</html>