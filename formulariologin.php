<?php
					// Permite incluir el script de un archivo, en el archivo donde es llamado
					//include_once, Permite una solo inclusión del archivo
					include_once('header.php');
				?>
<?php
					// Permite incluir el script de un archivo, en el archivo donde es llamado
					//include_once, Permite una solo inclusión del archivo
					include_once('php/menu.php');
					
				?>

<div id= "banner1">

			<section class="clear">
			<h2 align="center">Iniciar sesion</h2>
			<form action="php/login.php" method="post">
				<table align="center">
					<tr>
						<td>Email</td>
						<td ><input type="email" name="email"></td>
					</tr>
					<tr>
						<td>Contraseña</td>
						<td><input type="password" name="contrasena" ></td>
					</tr>
					<tr>
						<td><button type="submit">Ingresar</button></td>
					</tr>
					
				</table>
			</form>
			</section>
</div>
<?php
	// Permite incluir el script de un archivo, en el archivo donde es llamado
	//include_once, Permite una solo inclusión del archivo
		include_once('php/footer.inc');
?>
