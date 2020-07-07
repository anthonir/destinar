<?

function subir_imagen($archivo,$carpeta,$nombre,$ancho,$alto,$extension){

	//echo 'Archivo: '.$archivo.'<br> Carpeta: '.$carpeta.'<br> Nombre: '.$nombre.'<br> Ancho: '.$ancho.'<br> Alto: '.$alto.'<br>Extesion: '.$extension.'<br><br>';
	
	@chmod($carpeta,0777);
	
	if(strlen($archivo)>0){

		$nombre_archivo_new = $nombre.$extension;

		$ubicacion = strtolower($carpeta.$nombre_archivo_new);

		move_uploaded_file($archivo,$ubicacion);
		
		chmod($ubicacion,0777);
		

	}
	
	
}

?>