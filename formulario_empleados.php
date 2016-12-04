
<?php
	// Permite incluir el script de un archivo, en el archivo donde es llamado
	//include_once, Permite una solo inclusión del archivo
	Include_once('header.php');
	Include_once('php/menu.php');
?>

<div id="cssresidente">				

				<form action="php/reg_res.php" method="post">
					<table align="center">
						
						<tr class="formulario">
						<td>Nombre</td>
						<td><input type="text"  name="nombre"></td>



						<tr class="formulario">
						<td>Apellido</td>
						<td><input type="text"  name="apellido"></td>

						</tr>

						<tr class="formulario1">
						<td>Identificacion</td>
						<td><input type="number"  name="identificacion"></td>

						</tr>

						<tr class="formulario">
						<td>celular</td>
						<td><input type="number"  name="celular"></td>

						</tr>



						<tr class="formulario1">
						<td>Email</td>
						<td><input type="text"  name="email"></td>

							

						</tr>

						<tr class="formulario">


							<td>Funcion</td>
							<td><select  name="funcion">
                             <option value="serviciosgenerales"> Servicios Generales  </option>
                             <option value="Arrendatario"> Arrendatario </option>

							 </td>
						</tr>


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