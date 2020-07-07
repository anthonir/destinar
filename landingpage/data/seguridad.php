<?

$request_uri = $_SERVER['REQUEST_URI'];
$query_string = $_SERVER['QUERY_STRING'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];

if (	 
	stripos($request_uri, 'eval(') || 
	stripos($request_uri, 'CONCAT') || 
	stripos($request_uri, 'UNION+SELECT') || 
	stripos($request_uri, '(null)') || 
	stripos($request_uri, 'base64_') || 
	stripos($request_uri, '/localhost') || 
	stripos($request_uri, '/pingserver') || 
	stripos($request_uri, '/config.') || 
	stripos($request_uri, '/wwwroot') || 
	stripos($request_uri, '/makefile') || 
	stripos($request_uri, 'crossdomain.') || 
	stripos($request_uri, 'proc/self/environ') || 
	stripos($request_uri, 'etc/passwd') || 
	stripos($request_uri, '/https/') || 
	stripos($request_uri, '/http/') || 
	stripos($request_uri, '/ftp/') || 
	stripos($request_uri, '/cgi/') || 
	stripos($request_uri, '.cgi') || 
	stripos($request_uri, '.exe') || 
	stripos($request_uri, '.sql') || 
	stripos($request_uri, '.ini') || 
	stripos($request_uri, '.dll') || 
	stripos($request_uri, '.asp') || 
	stripos($request_uri, '.jsp') || 
	stripos($request_uri, '/.bash') || 
	stripos($request_uri, '/.git') || 
	stripos($request_uri, '/.svn') || 
	stripos($request_uri, '/.tar') || 
	stripos($request_uri, ' ') || 
	stripos($request_uri, '<') || 
	stripos($request_uri, '>') || 
	stripos($request_uri, '/=') || 
	stripos($request_uri, '...') || 
	stripos($request_uri, '+++') || 
	stripos($request_uri, '://') || 
	stripos($request_uri, '/&&') || 
	// query strings
	stripos($query_string, '?') || 
	stripos($query_string, ':') || 
	stripos($query_string, '[') || 
	stripos($query_string, ']') || 
	stripos($query_string, '../') || 
	stripos($query_string, '127.0.0.1') || 
	stripos($query_string, 'loopback') || 
	stripos($query_string, '%0A') || 
	stripos($query_string, '%0D') || 
	stripos($query_string, '%22') || 
	stripos($query_string, '%27') || 
	stripos($query_string, '%3C') || 
	stripos($query_string, '%3E') || 
	stripos($query_string, '%00') || 
	stripos($query_string, '%2e%2e') || 
	stripos($query_string, 'union') || 
	stripos($query_string, 'input_file') || 
	stripos($query_string, 'execute') || 
	stripos($query_string, 'mosconfig') || 
	stripos($query_string, 'environ') || 
	//stripos($query_string, 'scanner') || 
	stripos($query_string, 'path=.') || 
	stripos($query_string, 'mod=.') || 
	// user agents
	stripos($user_agent, 'binlar') || 
	stripos($user_agent, 'casper') || 
	stripos($user_agent, 'cmswor') || 
	stripos($user_agent, 'diavol') || 
	stripos($user_agent, 'dotbot') || 
	stripos($user_agent, 'finder') || 
	stripos($user_agent, 'flicky') || 
	stripos($user_agent, 'libwww') || 
	stripos($user_agent, 'nutch') || 
	stripos($user_agent, 'planet') || 
	stripos($user_agent, 'purebot') || 
	stripos($user_agent, 'pycurl') || 
	stripos($user_agent, 'skygrid') || 
	stripos($user_agent, 'sucker') || 
	stripos($user_agent, 'turnit') || 
	stripos($user_agent, 'vikspi') || 
	stripos($user_agent, 'zmeu')
) {
	@header('HTTP/1.1 403 Forbidden');
	@header('Status: 403 Forbidden');
	@header('Connection: Close');
	@exit;
}

function saneaVar($dato){ 
	$testSql=quitarSQL($dato);
	$testTags=removerTags($testSql);
	$textVar=limpiarVariables($testTags); 
	$limpio=$textVar;
	return $limpio;
}

function quitarSQL($entrada)
{
	if(preg_match('/UNION/',$entrada)){
		$entrada=explode('UNION',$entrada);
		$salida=rtrim(($entrada[0]));
	}elseif(preg_match('/union/',$entrada)){
		$entrada=explode('union',$entrada);
		$salida=rtrim(($entrada[0]));
	}else{
		$entrada = str_ireplace("WHERE","",$entrada);
		$entrada = str_ireplace("INSERT","",$entrada);
		$entrada = str_ireplace("UPDATE","",$entrada);
		$entrada = str_ireplace("SELECT","",$entrada);
		$entrada = str_ireplace("COPY","",$entrada);
		$entrada = str_ireplace("DELETE","",$entrada);
		$entrada = str_ireplace("DROP","",$entrada);
		$entrada = str_ireplace("DUMP","",$entrada);
		$entrada = str_ireplace("FROM","",$entrada);
		$entrada = str_ireplace(" OR ","",$entrada);
		$entrada = str_ireplace(" AND ","",$entrada);
		$entrada = str_ireplace("%","",$entrada);
		$entrada = str_ireplace("LIKE","",$entrada);
		$entrada = str_ireplace("--","",$entrada);
		$entrada = str_ireplace("^","",$entrada);
		$entrada = str_ireplace("[","",$entrada);
		$entrada = str_ireplace("]","",$entrada);
		$entrada = str_ireplace("\\","",$entrada);
		$entrada = str_ireplace("!","",$entrada);
		$entrada = str_ireplace("¡","",$entrada);
		$entrada = str_ireplace("?","",$entrada);
		$entrada = str_ireplace("=","",$entrada);
		$entrada = str_ireplace("&","",$entrada);
		$entrada = str_ireplace(">","",$entrada);
		$entrada = str_ireplace("<","",$entrada);
		$entrada = str_ireplace("*","",$entrada);
		$entrada = str_ireplace("~","",$entrada);
		$salida=($entrada);
	}
	return $salida;
}

function removerTags($entrada) {
	$busqueda=@array(
	'@<script[^>]*?>.*?</script>@si', // javascript
	'@<[\/\!]*?[^<>]*?>@si', // HTML 
	'@<style[^>]*?>.*?</style>@siU', // Css
	'@<![\s\S]*?--[ \t\n\r]*>@' // Comentarios multiples
	);
	
	$salida=str_replace($busqueda, '', $entrada);
	
	return $salida;
}

function limpiarVariables($entrada) {
	 if (@is_array($entrada)) {
		 foreach($entrada as $var=>$val) {
			$output[$var] = limpiarVariables($val);
		 }
	 } else {
		 if (@get_magic_quotes_gpc()) {
			$entrada=@stripslashes($entrada);
		 }
		 $salida= removerTags($entrada);
	 }
	 return $salida;
 }
 
function cambiar($cadena) {
$no_permitidas= array ("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","À","Ã","Ì","Ò","Ù","Ã™","Ã ","Ã¨","Ã¬","Ã²","Ã¹","ç","Ç","Ã¢","ê","Ã®","Ã´","Ã»","Ã‚","ÃŠ","ÃŽ","Ã”","Ã›","ü","Ã¶","Ã–","Ã¯","Ã¤","«","Ò","Ã","Ã„","Ã‹"," ","|",'+','(',')','/','.');
$permitidas= array ("a","e","i","o","u","A","E","I","O","U","n","N","A","E","I","O","U","a","e","i","o","u","c","C","a","e","i","o","u","A","E","I","O","U","u","o","O","i","a","e","U","I","A","E","-","","-","-","-","","-");
$texto = str_replace($no_permitidas, $permitidas ,$cadena);
return $texto;
}
 
?>
