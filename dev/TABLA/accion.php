<?php
include_once("../conexion.php");


if ($_POST['nombre']) {
	$consulta2=@mysql_query("INSERT INTO usuarios_banner (name, fecha, estado, telefono, reserva)
VALUES ('".$_POST['nombre']."', now(), 'Sin Contacto', '".$_POST['celular']."','".$_POST['reserva']."')",$conecta);
	mysql_close($conecta2);
	


	$to = "reservas@destinar.com.ar";
	$subject = "Registro de Usuario";
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
 
	$message = "
	<html>
	<head>
	<title>Destinar</title>
	</head>
	<body>
	<h1>Nuevo Registro</h1>
	<p>Nombre: ".$_POST['nombre']."</p>
	<p>Celular: ".$_POST['celular']."</p>
	<p>Reserva: ".$_POST['reserva']."</p>
	</body>
	</html>";
 
	mail($to, $subject, $message, $headers);



	header("location:index.php");
}

?>