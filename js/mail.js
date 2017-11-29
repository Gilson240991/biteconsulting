function EnviarMail(){
	var nombre = $('#template-contactform-name').val();
	var correo = $('#template-contactform-email').val();
	var telefono = $('#template-contactform-phone').val();
	var asunto = $('#template-contactform-subject').val();
	var servicio = $('#template-contactform-service').val();
	var mensaje = $('#template-contactform-message').val();
	var url='controlador/mailController.php';
	var funcion ='EnviarMail';
	$.ajax({
	url:url,
	type:'post',
	dataType:'json',
	data:{nombre:nombre,correo:correo,telefono:telefono,asunto:asunto,mensaje:mensaje,funcion:funcion},
	success:function(data){
		console.log(data.mensaje);
	}	
	});
}