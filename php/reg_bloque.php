
<?php

include_once ('../db/utilidades_sql.php');

if ($_POST) { 

	$bloque=isset($_POST['bloque'] ) ? 
	$_POST ['bloque']:'';

	$descripcion=isset($_POST['descripcion'] ) ? 
	$_POST ['descripcion']:'';


	

	$result = set_bloque($bloque,$descripcion);

	ob_start();

	header("refresh:3;url=../bloque.php");




	

}

?>