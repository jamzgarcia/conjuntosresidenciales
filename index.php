<?php

	include_once('header.php');

	include_once('php/menu.php');

	include_once('php/banner.php');
	
?>
<div id="contenido">

		<section  id="eventos">
					<div class="FC"><caption> Enterate de los Ultimos Eventos</caption></div>
					<?php include_once('php/eventos.php');?>
		</section>
						
				<section  id="noticias">
					<div class="FC"><h4>Noticias</h4></div>
					
				</section>


				<section id="reserva">
					<div class="titulo"><h4>Reserva</h4></div>
				</section>
				

</div>

<?php
	include_once('php/footer.inc')
?>

