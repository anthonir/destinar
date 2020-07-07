<?

//URLbase
$URLbase='http://'.$_SERVER['SERVER_NAME'].str_replace ($_SERVER['DOCUMENT_ROOT'], '', dirname($_SERVER['SCRIPT_FILENAME'])).'/';
$URLget=substr($URLbase,0,-1).$_SERVER['REQUEST_URI'];


//SEO
$title='DESTINAR | Apart Hotel Cariló';
$description='Excelente en Cariló Buenos Aires Argentina. La mejor ubicación';

//ADWORDS
$analytics="<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src='https://www.googletagmanager.com/gtag/js?id=UA-125728049-1'></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-125728049-1');
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


//INFO
$email_web='reservas@destinar.com.ar';
$empresa_web='Destinar';

$telefono_web='+54 2254 57-2877';
$movil_web='+542254572877';

$whatsapp_web="11-2362-0164";
$whatsapp_movil_web="5491123620164";


$direccion_web='Avutarda 1110, Esquina Jacaranda, B7167 Cariló, Pcia de Buenos Aires';
$footer_web='Destinar.';
$horario_web='Lunes a Viernes de 08:00hs a 16:00hs';

$facebook_web='https://www.facebook.com/Destinar-2153359138325041/';
$instagram_web='https://www.instagram.com/hotel_destinar/';


//direccion-web
$latitude="-37.165108"; 
$longitude="-56.895469"; 

$version="09102018";



?>