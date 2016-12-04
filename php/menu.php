<?php if(isset($_SESSION['email'])){ ?>
			

	<?php if ($_SESSION['rol']=='admin') { ?>

<div id="nav">
<div class="FI" id="menu">

			<nav>
			
				<ul  class="nav">
					<li><a href="index.php" >Inicio</a></li>
					<li><a href='formularioregistro.php'>Crear Usuario</a> </li>
							<li><a> Administracion Formularios</a>
							<ul>
							<li><a href="apartamento.php">Ing Apartamento</a></li>
							<li><a href="bloque.php">Ing Bloque</a></li>
							<li><a href="interior.php">Ing Interior</a></li>
							<li><a href="formulario_pro.php">Ing Propietario</a></li>
							<li><a href="formulario_res.php">Ing Recidente</a></li>
							<li><a href="formulario_vis.php">Ing Visitante</a></li>
							
							</ul>
						</li>
						<li><a>Crear Eventos</a>
						<ul>
						<li><a href="formulario_eventos.php">Crear Evento</a></li>
						</ul>
						</li>
						<li><a> Generar Pagos</a>
						<ul>
						<li><a href="formulario_detalle.php"">generar factura</a></li>
						</ul>
						<li><a>Revisar  Reservas</a>
						<ul>
						<li><a href="">Ver Reservas</a></li>
						</ul>
				

							<li><a href="db/backup.php"">backup</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
</div>


<?php } else { ?>	
 
 

<div id="nav">
		 <div class="FI" id="menu">
		 	<nav>
			
				<ul  class="nav">
					<li><a href="index.php" >Inicio</a></li>
					<li><a href="reserva.php">Reserva Aqui</a></li>
					<li><a href="tienda.php">Quienes Somos</a></li>				
					<li><a href="contacto.php">Contactenos</a></li>					
				    </li>	

				</ul>
			</nav>
		</div>
</div>
		<?php } ?>

		<?php } else { ?>

<div id="nav">
			<div class="FI" id="menu">
			<nav>
			
				<ul  class="nav">
					<li><a href="index.php" >Inicio</a></li>
					<li><a href="tienda.php">Quienes Somos</a></li>				
					<li><a href="contacto.php">Contactenos</a></li>					
				    </li>	

				</ul>
			</nav>
			</nav>
		</div>
</div>
		<?php } ?>
