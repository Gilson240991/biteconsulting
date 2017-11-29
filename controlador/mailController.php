<?php 
include_once '../modelo/mailModelo.php';

$mail = new mailModelo();
$funcion = $_REQUEST['funcion'];

switch ($funcion) {
	case 'EnviarMail':
		
		$nombre = (isset($_POST['nombre']))?$_POST['nombre']:"";
		$correo = (isset($_POST['correo']))?$_POST['correo']:"";
		$telefono = (isset($_POST['telefono']))?$_POST['telefono']:"";
		$asunto = (isset($_POST['asunto']))?$_POST['asunto']:"";
		$servicio = (isset($_POST['servicio']))?$_POST['servicio']:"";
		$mensaje = (isset($_POST['mensaje']))?$_POST['mensaje']:"";
		
		if($mail->enviarmail($nombre,$correo,$telefono,$asunto,$servicio,$mensaje)){
			$mensaje ="Se envio exitosamente su correo; No demoraremos en responder.";
		}

		$mail['mensaje']=$mensaje;
		echo json_encode($mail);

		break;
	
	default:
		# code...
		break;
}