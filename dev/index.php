<? ob_start(); session_start(); 
include('conexion.php');
include('data/funciones/seguridad.php');
$accion=saneaVar($_GET['accion']);
$seccion=saneaVar($_GET['seccion']);
include ('data/info.php');
include ('data/estructura/head.php');
include ('data/estructura/cabecera.php');
?>
<div id="contenido">
<? 
$match_code="/^(?:\+|-)?\d+[A-Z]{1,1}$/";
$match_code2="/^(?:\+|-)?\d+$/";

if (strlen($accion)>0 AND (preg_match($match_code,$accion) OR preg_match($match_code2,$accion))) {
	
	switch ($accion){
		
		case '1':
		include('data/contenido/contenidos.php');
		break;	

	}

} else {

	include('data/contenido/home.php');
} 

?>

<div class="clear"></div>
</div>

<? include('data/estructura/footer.php'); ob_end_flush();?>