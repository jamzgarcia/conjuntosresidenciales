
<?php
	// Permite incluir el script de un archivo, en el archivo donde es llamado
	//include_once, Permite una solo inclusión del archivo
	Include_once('header.php');
	Include_once('php/menu.php');
?>


<div id="cssbloque">
					<form action="php/reg_bloque.php" method="post">
					<table align="center">
						<tr class="formulario_bloque">
						<h1 class="titulo">Ingreso de bloques</h1>


							<td>Bloque</td>
							<td><input type="text" name="bloque"</td>
							
							
						</tr>


						

						<tr class="formulario_bloque2">
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