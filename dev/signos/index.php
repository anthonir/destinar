<?php
	
	ob_start();
	
	ini_set('session.gc_maxlifetime', 86400);

	session_start();

	header("Pragma: no-cache");
	include('data/funciones/seguridad.php');

	$usuario_adm=saneaVar($_POST['usuario']);
	$clave_adm=saneaVar($_POST['clave']);
	$session=(saneaVar($_GET['session']));

	if($session=='salir'){
		
		setcookie("recordarme");
		setcookie("usuario");
		setcookie("clave");	
		setcookie("activo");
		
		session_destroy();

		header('location:index.php'); 
		
	}


	if (!empty($usuario_adm) AND !empty($clave_adm)){

		include("conexion.php");
		$query=mysql_query("SELECT * FROM usuarios WHERE usuario='".@mysql_real_escape_string($usuario_adm)."' AND psw='".@mysql_real_escape_string($clave_adm)."'");
		$row=mysql_fetch_array($query);
		$reg=mysql_num_rows($query);
		
		if ($reg>0){
		
			if (isset($_POST['recordarme']) && $_POST['recordarme'] == 'si') {
				
				
				setcookie("recordarme","checked", time()+(60*60*24*365));
				setcookie("usuario",$usuario_adm, time()+(60*60*24*365));
				setcookie("clave",$clave_adm, time()+(60*60*24*365));
				
			} else {
				
				setcookie("recordarme");
				setcookie("usuario");
				setcookie("clave");
			}
		
			if ($usuario_adm == $row['usuario'] && $clave_adm == $row['psw']) {
				
				$_SESSION['activo'] = true;
				$_SESSION['usuario'] = $row['usuario'];
				$_SESSION['minutos'] = time();
				
				setcookie("activo",$usuario_adm, time()+(60*60*24*365));
				
				header('refresh:0; url=menu.php?accion=2A&tipo=promociones');
				
				exit();
			}
			
		} else {
			
			$mensaje='error';
			
		}	
		
	}

	


?>
<!DOCTYPE html>
<html>
<head>
<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />
<meta name="Robots" content="noindex">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Pcsignos - Panel Administrador</title>
<link rel="stylesheet" href="css/estilos.css" type="text/css" />
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.9.2.min.js"></script>
<script type="text/javascript" src="js/modernizr.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</head>


<body class="loginpage">

<div class="loginpanel">
    <div class="loginpanelinner">
        <div class="logo animate0 bounceIn"><img src="images/logo2.png" alt="" /></div>
        
        <? if ($mensaje=='error'){?> 
        
			<div class="alert alert-error">
			<button data-dismiss="alert" class="close" type="button">&times;</button>
			Los datos ingresados son incorrectos
			</div>

        <? } ?>
        
        <form method="post" action="index.php" name="login" id="login">
            
            <div class="inputwrapper animate1 bounceIn">
                <input type="text" name="usuario" id="usuario" placeholder="Usuario"  value="<?php if (isset($_COOKIE['usuario'])){echo $_COOKIE['usuario']; }?>" required>
            </div>
            <div class="inputwrapper animate2 bounceIn">
                <input type="password" name="clave" id="clave" placeholder="Contrase&ntilde;a" value="<?php if (isset($_COOKIE['clave'])) { echo $_COOKIE['clave']; } ?>" required>
            </div>
            <div class="inputwrapper animate3 bounceIn">
               <input name="Ingresar" type="submit" value="Ingresar" class="bt">
            </div>
            <div class="inputwrapper animate4 bounceIn">
                <label><input type="checkbox" class="remember" name="recordarme" id="recordarme" value="si" <?php if (isset ($_COOKIE['recordarme'])){ echo $_COOKIE['recordarme'];} ?>> Recordame</label>
            </div>
            
        </form>
    </div>
</div>

<div class="loginfooter">
<p>&copy; Pcsignos - Panel Administrador - Todos los derechos reservados.</p>
</div>

</body>
</html>


<? ob_end_flush();?>