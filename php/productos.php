<?php
include_once ('db/utilidades_sql.php');
$result = get_productos();
?>
<div id="vistaproductos">
<?php

while ($datos_productos=$result->fetch_assoc()) { ?>
		
	<div class="doblecolunma">
			<div class="texto"><?php echo $datos_productos['nombre']?> </div>
			<?php echo "<a href='infoproducto.php?id=".$datos_productos['_id_juego']."'> 
			<img class='PREVIEW' src='".$datos_productos['img_preview']."' /></a><a>"; ?>
		
	</div>


<?php } ?>
</div>