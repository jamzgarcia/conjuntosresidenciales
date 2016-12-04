
<?php
	// Permite incluir el script de un archivo, en el archivo donde es llamado
	//include_once, Permite una solo inclusión del archivo
	Include_once('header.php');
	Include_once('php/menu.php');
?>
		
				<div id="cssinterior">
				<form action="php/reg_int.php" method="post">
					<table align="center">

						<tr class="formulario_interior">
						<h1 class="titulo">Ingreso de Interior </h1>


							<td>Bloque</td>
							<td><select  name="bloque">
						<?php  $result=get_bloque();
							   while ($datos_bloque=$result->fetch_assoc()){

						?>	  

						   <option value=" <?php echo $datos_bloque['_id_bloque']; ?> "><?php echo $datos_bloque['nombre']; ?> </option>;
                           <?php }
                          ?>   </select>
							 </td>
						</tr>


						<tr class="formulario_interior2">
							<td>nombre</td>
							<td><input type="text"  name="nombre"></td>
							
						</tr>

						<tr class="formulario_interior">
							<td>descripcion</td>
							<td><input type="text"  name="descripcion"></td>

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