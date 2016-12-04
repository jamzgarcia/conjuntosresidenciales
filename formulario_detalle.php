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

		<div id="css_pagos">
			
			<section>
				<form action="php/imprimir_pago.php"  method="POST">
					<table align="center">
					<h1 class="titulo">Visualizar Pagos</h1>
						
						


						<tr>
							<td><button type="submit">ver</button></td>
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