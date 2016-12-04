
<?php
	// Permite incluir el script de un archivo, en el archivo donde es llamado
	//include_once, Permite una solo inclusión del archivo
	Include_once('header.php');
	Include_once('php/menu.php');
?>
	
		
				<div id="csspropietario">	
					<form action="reg_pro.php" method="post">
					<h1 class="titulo">Ingreso de Propietarios</h1>
					<table align="center">
						<tr class="formulario_pro">
							<td>Nombre</td>
								<td><input type="text"  name="nombre"></td>

						</tr>



						<tr class="formulario_pro2">
							<td>Apellido</td>
								<td><input type="text"  name="apellido"></td>

						</tr>

						</tr>

						<tr class="formulario_pro">
							<td>Identificación</td>
								<td><input type="number"  name="identificacion"></td>
						
						</tr>

						<tr class="formulario_pro2">
						<td>Celular</td>
						<td><input type="number"  name="celular"></td>

							

						</tr>

						<tr class="formulario_pro">
						<td>Email</td>
						<td><input type="text"  name="email"></td>

					


						<tr>
							<td><button type="submit">Registrar</button></td>
						</tr>




				</table>
				</form>
</div>
<?php
	// Permite incluir el script de un archivo, en el archivo donde es llamado
	//include_once, Permite una solo inclusión del archivo
		include_once('php/footer.inc');
?>
</body>
</html>