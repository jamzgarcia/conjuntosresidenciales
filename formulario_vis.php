

<?php
	// Permite incluir el script de un archivo, en el archivo donde es llamado
	//include_once, Permite una solo inclusión del archivo
	Include_once('header.php');
	Include_once('php/menu.php');
?>
				<div>				

				<form action="php/reg_vis.php" method="post">
					<table align="center">
						<tr class="formulario_vis">
						<h1 class="titulo">Ingreso de Visitantes</h1>


							<td>apartamento</td>
							<td><select  name="apartamento">
						<?php  $result=get_apartamento();
							   while ($datos_apartamento=$result->fetch_assoc()){

						?>	  

						   <option value=" <?php echo $datos_apartamento['_id_apartamento']; ?> "><?php echo $datos_apartamento['nombre']; ?> </option>;
                           <?php }
                          ?>   </select></td>
						</tr>

						<tr class="formulario_vis2">
						<td>Nombre</td>
						<td><input type="text"  name="nombre"></td>



						<tr class="formulario_vis">
						<td>Apellido</td>
						<td><input type="text"  name="apellido"></td>

						</tr>

						<tr class="formulario_vis2">
						<td>Identificacion</td>
						<td><input type="number"  name="identificacion"></td>

						</tr>

						<tr class="formulario_vis">
						<td>celular</td>
						<td><input type="number"  name="celular"></td>

						</tr>



						<tr class="formulario_vis2">
						<td>Email</td>
						<td><input type="text"  name="email"></td>
						</tr>

						<tr class="jhon2">
						<td>Fecha ingreso</td>
						<td><input type="date"  name="fecha_ingreso"></td>
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