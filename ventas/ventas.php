
<div class="ventas">
	<div class="boton_agregar">
		<button id="nueva_venta" onclick="ventana(5)"><i class="fa fa-cart-plus" aria-hidden="true"></i> Nueva Venta</button>
	</div>
	<h2>Ventas Activas</h2>
	<div class="tabla_ventasR">
		<table id="tabla_ventas" align="center">
				<thead id="head_tabla_ventas">

					<th>Folio de venta</th>
					<th>Clave Cliente</th>
					<th>Nombre</th>
					<th>Total</th>
					<th>Fecha</th>
				</thead>
			
			<?php 
		  	$ventasr="SELECT *FROM ventas";
		  	$ventas=mysqli_query($con,$ventasr);
		  	if(mysqli_num_rows($ventas)!=0)
			{
		  		while ($re=mysqli_fetch_array($ventas)) 
				{		  				
						
						$folio_v=$re["folio_venta"];
						$folio_c=$re["folio_cliente"];
						$cliente=$re["cliente"];
						$total=$re["total"];
						$fecha=$re["fecha"];
						
		  			?>
				<tr>
		  				<th><?php echo $folio_v; ?></th>
		  				<th><?php echo $folio_c; ?> </th>
		  				<th><?php echo $cliente; ?> </th>
		  				<th><?php echo "$".$total; ?> </th>
		  				<th><?php echo $fecha; ?> </th>
		  				
		  			
		  			</tr>
		<?php
				}
		  	}
		  	?>
		</table> 
	</div>
</div>
