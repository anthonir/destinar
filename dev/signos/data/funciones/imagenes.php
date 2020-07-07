<? 


function subirImagen($archivo,$carpeta,$nombre,$ancho,$alto,$extension){

	//echo 'Archivo: '.$archivo.'<br> Carpeta: '.$carpeta.'<br> Nombre: '.$nombre.'<br> Ancho: '.$ancho.'<br> Alto: '.$alto.'<br>Extesion: '.$extension.'<br><br>';
	
	@chmod($carpeta,0777);
	
	if(strlen($archivo)>0){

		$nombre_archivo_new = $nombre.$extension;

		$ubicacion = strtolower($carpeta.$nombre_archivo_new);

		move_uploaded_file($archivo,$ubicacion);
		
		chmod($ubicacion,0777);
		

	}
	
	
}


$x='';
$datos='';
$ancho='';
$alto='';
$nombre2='';

for ($x = 1; $x <= 5; $x++) {

	
	$img[$x]=$_FILES['img'.$x]['tmp_name'];
	
	
	if(($C_img[$x])=='ok'){
		
		$datos[$x]=getimagesize($img[$x]);
		
		
		if ($datos[$x]['mime']=='image/jpeg'){


			$extension[$x]='.jpg';

		}

		if ($datos[$x]['mime']=='image/png'){


			$extension[$x]='.png';

		}

		if ($datos[$x]['mime']=='image/gif'){


			$extension[$x]='.gif';

		}
		
		
		if($peso[$x]>900000){
			
			$ancho=0; 
			
		} else {
			
			if($datos[$x][0]>1000){

				$ancho[$x]=1000;

			} else {

				$ancho[$x]=$datos[$x][0];

			} 
			
			$alto[$x]=($ancho[$x] / $datos[$x][0]) * $datos[$x][1];
		
		}
		
	
		if($datos[$x][2]>=1 AND $datos[$x][2]<=3){
			
			$value=str_pad($x,2,"0",STR_PAD_LEFT);

			$nombre2=$value."_".time('m:s');

		} 

		if($ancho[$x]>0){
	
			$subirImagen=subirImagen($img[$x],$carpeta,$nombre2,$ancho[$x],$alto[$x],$extension[$x]);
		}
		
	}
	
}

?>
