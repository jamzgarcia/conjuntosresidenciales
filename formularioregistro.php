<?php

include_once ('php/utilidades.php');

if(isset($_SESSION['email'])){

	if ($_SESSION['rol']=='cliente'){
		header('location:index.php');
		die();
	}
}
?>



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



			
				
			<div id="banner1">
			<section class="clear">

				<form action="php/registro.php" method="post">
										<h1 align="center">Registrate</h1>
					<table align="center">
						<tr>
							<td>Email</td>
							<td><input type="text" name="email" required="(nombre@dominio.com)">Por Ej: (nombre@dominio.com)</td> 
						</tr>
						<tr>
							<td>Contraseña</td>
							<td><input type="password"  name="contrasena">Por Ej: (*******)</td>
						</tr>
						<tr>
							<td>Confirmar Contraseña</td>
							<td><input type="password"  name="con_contrasena" required="">Por Ej: (*******)</td>
						</tr>
						<tr>
							<td>Fecha Nacimiento</td>
							<td><input type="date"   name="fec_nac" required=""></td>
						</tr>
						<tr>
							<td>Nacionalidad</td>
							<td><input type="text" name="nacionalidad" required="">Por Ej: (Colombia)</td>
						</tr>
						<tr>
							<td>Region</td>
							<td><input type="text" name="region" required="">Por Ej: (Cundinamarca)</td>
						</tr>
						<tr>
							<td>Ciudad</td>
							<td><input type="text" name="ciudad" required="">Por Ej: Bogotá<td>
						</tr>

					<?php if (isset($_SESSION['rol'])=='cliente'){ ?>

						<tr>
							<td>Rol</td>
								<td> <select>
  									<option value="admin">Administrador</option>
 									<option value="user">Usuario</option>
 									<option value="user">Guarda</option>
								</select> 
							</td>
						</tr>
						<?php } ?>

						<tr>
							<td><button type="submit">Registrar</button></td>
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
