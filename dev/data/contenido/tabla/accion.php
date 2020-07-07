<?php
include_once("../conexion.php");


if ($_POST['nombre']) {
	$consulta2=@mysql_query("INSERT INTO usuarios_banner (name, fecha, estado, telefono, reserva)
VALUES ('".$_POST['nombre']."', now(), 'Sin Contacto', '".$_POST['celular']."','".$_POST['reserva']."')",$conecta);
	mysql_close($conecta2);
	
	header("location:index.php");
}

?>