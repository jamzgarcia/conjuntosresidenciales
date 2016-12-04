<?php
/* Para incluir librerías de base de datos y utilidades */
include_once('db/utilidades_sql.php');
include_once ('php/utilidades.php');

?>
<!Doctype html>
<html>
	<head>
		<title>Conjunto Recidencial</title>
	<!-- Meta datos = información que capturan los buscadores-->
			<meta name="descripcion-contenido" content="content">
			<link rel="shortcut icon" type="img/png" href="img/icono.jpg">
	<!-- enlace a la hoja de estilos principal-->
			<link rel="stylesheet" type="text/css" href="css/estilos.css">
			<link rel="stylesheet" type="text/css" href="css/banner.css">
			<link rel="stylesheet" type="text/css" href="css/menu.css">
			<link rel="shortcut icon" type="img/png" href="img/logocr.png">
			
			
	</head>




		<body>
		<div id="contenedorprincipal">
		<header>	
			<div class ="FI" id="logo"></div>

			<div class="FD" id="logeo">
				<?php	if(isset($_SESSION['email'])){ 
					echo "<h4>".$_SESSION['email']."</h4> <h4> <a href='php/logout.php'> Salir </a></h4>";
				}else{
						echo "<h4> <a href='formulariologin.php'> Ingresar </a><h4>	<a href='formularioregistro.php'>	Registrarse </a></h4>";
				}
				?>
			</div>

	

		</header>	

</body>	
</html>
