
$('#agregarCliente').click(function() {
	var route ="http://localhost:8000/customer/";
	var nombre_cliente = $("#nombrecliente").val();
	$.ajax({ 
		type:'PUT', 
		dataType:'json', 
		data: {
			nombrecliente: nombre_cliente
		}
		, success:function(res) {
			if (res.status == 'OK') {
				$('#alerts').html('<div class="alert alert-success"><button type="button"class="close"data-dismiss="alert">×</button>' + res.msj + '</div>');
				$('#alerts').fadeIn(400).delay(4000).fadeOut(500);
								
			}
		}
	})
});

