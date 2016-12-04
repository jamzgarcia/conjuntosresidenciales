
<?php

include_once ('../db/utilidades_sql.php');

if ($_POST) { 

	$_id_apartamento=isset($_POST['apartamento'] ) ? 
	$_POST ['apartamento']:'';

	$nombre=isset($_POST['nombre'] ) ? 
	$_POST ['nombre']:'';

	$apellido=isset($_POST['apellido'] ) ? 
	$_POST ['apellido']:'';

	$usuario=isset($_POST['usuario'] ) ? 
	$_POST ['usuario']:'';

	$concepto=isset($_POST['concepto'] ) ? 
	$_POST ['concepto']:'';

	$fecha_cobro=isset($_POST['fecha_cobro'] ) ? 
	$_POST ['fecha_cobro']:'';

	$total_pagar=isset($_POST['total_pagar'] ) ? 
	$_POST ['total_pagar']:'';

	$result = set_formulario_pagos($_id_apartamento,$nombre,$apellido,$usuario,$concepto,$fecha_cobro,$total_pagar);

	ob_start();

	header("refresh:3;url=formulario_pagos.php");




	

}

?>