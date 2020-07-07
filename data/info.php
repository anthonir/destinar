<? 
//include('conexion.php');

if ($usuario_base=="root"){$protocolo ="http://";} else {$protocolo ="https://";}

//URLbase
$URLbase=$protocolo.$_SERVER['SERVER_NAME'].str_replace ($_SERVER['DOCUMENT_ROOT'], '', dirname($_SERVER['SCRIPT_FILENAME'])).'/';
$URLget=substr($URLbase,0,-1).$_SERVER['REQUEST_URI'];

//Info
$queryInfo=@mysql_query("SELECT * FROM info");
$rowInfo=@mysql_fetch_assoc($queryInfo);
$vInfo=@explode('~',($rowInfo['contenido']));

$email_web=($vInfo[0]);

$telefono_web=($vInfo[1]);
$movil_web='tel:'.preg_replace('/[^0-9]+/', '',$vInfo[1]);
$whatsapp_web=$vInfo[2];
$whatsapp_movil_web=preg_replace('/[^0-9]+/', '',$vInfo[2]);

$direccion_web=($vInfo[3]);
$horario_web=($vInfo[4]);

$facebook_web=($vInfo[7]);
$twitter_web=($vInfo[8]);
$instagram_web=($vInfo[9]);
$youtube_web=($vInfo[10]);
$empresa_web=($vInfo[11]);
$dominio_web=($vInfo[12]);
$footer_web=($vInfo[13]);

$google_como_llegar="https://www.google.com.ar/maps/dir//Dock+de+Mar,+Avutarda+1110,+B7167+Caril%C3%B3,+Pcia+de+Buenos+Aires/@-37.16515,-56.8974027,17z/data=!4m8!4m7!1m0!1m5!1m1!1s0x959c9dc24db6c457:0x9c464b9760f983e3!2m2!1d-56.895214!2d-37.16515";
$reserva_online="https://hotels.cloudbeds.com/reservation/vGYC4D";

//timezone
date_default_timezone_set('America/Argentina/Buenos_Aires');

//Version Files
$version = "03122018";

//ADWORDS
$analytics="<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src='https://www.googletagmanager.com/gtag/js?id=UA-149073238-1'></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-149073238-1');
</script>
<!-- Global site tag (gtag.js) - Google Ads: 788408532 -->
<script async src='https://www.googletagmanager.com/gtag/js?id=AW-788408532'></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-788408532');
</script>
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '632081110523519');
  fbq('track', 'PageView');
</script>
<noscript><img height='1' width='1' style='display:none'
  src='https://www.facebook.com/tr?id=632081110523519&ev=PageView&noscript=1'
/></noscript>
<!-- End Facebook Pixel Code -->";

$conversion="​<!-- Event snippet for Formulario De Contactos conversion page --><script type='text/javascript'>gtag('event', 'conversion', {'send_to': 'AW-788408532/Bv9ACN-9nYkBENTR-PcC'});</script>";

$conversion_evento_telefono="AW-788408532/6svpCNmdq4kBENTR-PcC";
$conversion_evento_whatsapp="AW-788408532/ALdqCOT5sokBENTR-PcC";



//URL
$vURL=explode('/',$_GET['url']);

if (!empty($vURL[0])){
	
	$seccion=saneaVar($vURL[0]);

	if ($seccion=='home'){

		$accion="";

	} else {
		
		$accion=1;
			
	} 
	
}

//Seo
$querySeo=@mysql_query("SELECT * FROM seo");
while($rowSeo=@mysql_fetch_assoc($querySeo)){

	$vSeo=@explode('~',($rowSeo['contenido']));

	if ($accion=="" AND $rowSeo['tipo']=="home"){

		$title=$vSeo[0];
		$description=$vSeo[1];

	}

	if ($accion==1){

		if ($seccion==$rowSeo['tipo']){

			$title=$vSeo[0];
			$description=$vSeo[1];
		}

	}

}
//end:seo


//seguridad
$secciones="home,aparts,servicios,contacto";

if (!preg_match("/$seccion/",$secciones)){

	header('location:'.$URLbase);
}
//end:seguridad



?>