<script type="text/javascript" src="js/configuraciondetasa.js"></script>
<div class="header_nv">
<h3 align="left"> Configuracion General</h3>
</div>
<div class="cuerpo">
 	<?php 
	$confi="SELECT * FROM configuracion ";
	$configuracion=mysqli_query($con,$confi);
	if(mysqli_num_rows($configuracion)!=0)
	{
		while ($re=mysqli_fetch_array($configuracion)) 
		{			
		  			$tasa=$re["tasa_financiamiento"];
		  			$enganche=$re["enganche"];
		  			$plazo=$re["plazo_maximo"];			
		}
   ?>
	<br>
	<br>
			<div class="formulario">
				<b>	<label>Tasa financiamiento: </label>
					<input type="text"  style="width: 200PX;" onkeypress="return valida_numeros(event)" name="Tasa de financiamiento" class="clientes" id="tasa"><br><br>
					<label>% Enganche: </label>
					<input type="text" style="width: 200PX;"  onkeypress="return valida_numeros(event)" name="Enganche" class="clientes" id="enganche"><br><br>
					<label>Plazo maximo</label></b>
					<input type="text"  style="width: 200PX;"  onkeypress="return valida_numeros(event)" name="Plazo maximo" class="clientes" id="plazo"><br><br>
				
			</div>
</div>
	<div class="botones"><br>
	<button class="botones_gral"  onclick="volver();">Cancelar</button>
	<button class="botones_gral"  onclick="guardar_cambios('1');">Guardar</button>
</div>
	<?php
		}
	else 
	{
	?>
			<br>
			<br>
		  </div>
	<?php
		}
	?>


