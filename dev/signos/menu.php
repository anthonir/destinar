<?php ob_start(); session_start(); if (!isset($_COOKIE['activo'])) { session_destroy(); header('refresh:0; url=index.php'); exit();}?>

<?php if ($_SESSION['usuario']=='destinar'){

	if ($_GET['accion']=="3A" OR $_GET['accion']=="4A" OR $_GET['accion']=="5A" OR  ( $_GET['tipo']!="promociones"  and  $_GET['tipo']!="usuarios" and  $_GET['tipo']!="tipo-habitación" and  $_GET['tipo']!="precio-mes") ){

		header("location:menu.php?accion=2A&tipo=promociones");
	}

}?>

<?php include ('data/funciones/seguridad.php');?>
<?php include ('data/estructura/head.php');?>
<?php $accion=$_GET['accion'];?>
<?php include ('data/estructura/cabecera.php');?>

<div class="mainwrapper">
<?php include ('data/estructura/menu.php');?> 

<div class="rightpanel">

<?php
 
$match_code="/^(?:\+|-)?\d+[A-Z]{1,1}$/";
$match_code2="/^(?:\+|-)?\d+$/";
if (strlen($accion)>0 AND (preg_match($match_code,$accion) OR preg_match($match_code2,$accion)) ) { 

switch ($accion){

	
	case '2A':
	include('data/contenido/alta_banner.php');
	break;

	case '3A':
	include('data/contenido/alta_seo.php');
	break;

	default:
	case '4A':
	include('data/contenido/alta_info.php');
	break;
	
	case '5A':
	include('data/contenido/alta_contenido.php');
	break;

	case '6A':
	include('data/contenido/alta_registro.php');
	break;



		
									
}} else header('location:menu.php?accion=2A&tipo=promociones');

?>

</div>
</div>

</body>
</html>

<?php ob_end_flush();?>