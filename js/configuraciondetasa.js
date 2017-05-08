function guardar_cambios(control)
{
	var campo_vacio=[];
			if($.trim($('#tasa').val()).length &&$.trim($('#enganche').val()).length&&$.trim($('#plazo').val()).length)
	{
		$.ajax({
				type:"POST",
				url:"actions/guardar_configuracion.php",
				data:{
					tasa    			     :$("#tasa").val(),
					enganche			 :$("#enganche").val(),
					plazo					 :$("#plazo").val(),
					control					:control
				
				}
				}).done(function(data){
			console.log(data);
					if(data==1 || data=="1")
					{
						toastr.options.positionClass = 'toast-top-center';
							toastr.success('Bien Hecho. La configuración ha sido registrada');
						setTimeout('document.location.href="index.php?view=4"',4000);
					}
		
				});
	}
		else
		{
				console.log($(".clientes"));
			for(var i=0; i<$(".clientes").length; i++)
			{
				console.log($(".clientes")[i].value);
				if($(".clientes")[i].value=="")
				{
					campo_vacio.push($(".clientes")[i].name);
				}

			}
							
							toastr.options.positionClass = 'toast-top-center';
							toastr.error('No es posible continuar, debe ingresar '+campo_vacio +' para poder seguir');
		}

}
function volver()
{
	alertify.confirm('', 'Deseas cancelar la operación? ', function()
							 { 
								setTimeout('document.location.href="index.php"',1000);
							}
                				, function(){ }).set({transition:'zoom'});
}