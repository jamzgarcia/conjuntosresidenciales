
<?php

include_once ('../db/utilidades_sql.php');

if ($_POST) { 

	$_id_bloque=isset($_POST['bloque'] ) ? 
	$_POST ['bloque']:'';

	$nombre=isset($_POST['nombre'] ) ? 
	$_POST ['nombre']:'';

	$descripcion=isset($_POST['descripcion'] ) ? 
	$_POST ['descripcion']:'';


	

	$result = set_interior($_id_bloque,$nombre,$descripcion);

	ob_start();

	header("refresh:3;url=../interior.php");




	

}

?>