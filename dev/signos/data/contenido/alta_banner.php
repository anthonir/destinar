<? session_start();	if (!isset($_COOKIE['activo'])) { session_destroy(); header('refresh:0; url=index.php'); exit(); }

include('conexion.php');


$tipo=saneaVar($_GET['tipo']);
$dato=saneaVar($_GET['dato']);
$confirmacion=saneaVar($_GET['confirmacion']);

if (strlen($_POST['editar'])>0){$editar=saneaVar($_POST['editar']);} else {$editar=saneaVar($_GET['editar']);}
if (strlen($_POST['metodo'])>0){$metodo=saneaVar($_POST['metodo']);} else {$metodo=saneaVar($_GET['metodo']);}

//medidas
if ($tipo=='principal'){$ancho_banner=1920;$alto_banner=700; $mod_enlace="si"; $mod_titulo="si";  $mod_subtitulo="si"; $mod_boton="si";}
if ($tipo=='principal-response'){$ancho_banner=1200;$alto_banner=800; $mod_enlace="si"; $mod_titulo="si";  $mod_subtitulo="si"; $mod_boton="si";}

//secundarios
if ($tipo=='secundarios'){$ancho_banner=600;$alto_banner=400;}

//promociones
if ($tipo=='promociones'){$ancho_banner=800;$alto_banner=800; $mod_fecha=""; $mod_url=""; $mod_file=""; $mod_enlace=""; $mod_titulo="si";  $mod_subtitulo="si";  $mod_contenido="si";  $mod_precio="si"; $maxlength_titulo="30"; $maxlength_subtitulo="80"; $maxlength_contenido="600";}


//Aparts & Habitaciones
//listar
if ($tipo=='aparts'){$ancho_banner=800;$alto_banner=800; $mod_titulo="si"; $mod_subtitulo="si";$mod_precio="si"; $mod_contenido="";} 
//galeria
if ($tipo=='aparts-galeria'){$ancho_banner=800;$alto_banner=800; $mod_titulo=""; $mod_contenido=""; $mod_galeria="si";} 


//servicios
if ($tipo=='servicios'){$ancho_banner=600;$alto_banner=600;} 


if ($editar=="Modificar"){
	
	$url=$_POST['url'];

	$contenido.=$_POST['titulo'].'~';
    $contenido.=$_POST['subtitulo'].'~';
	$contenido.=$_POST['contenido'].'~';
    $contenido.=$_POST['boton'].'~';
    $contenido.=$_POST['precio'].'~';

	$contenido=str_replace("'",'"',$contenido);
	$contenido=($contenido);

	$estado=$_POST['estado'];

	$idx=saneaVar($_POST['idx']); 

	include("data/funciones/nimagenB.php");
		
	if(strlen($_FILES['carpeta']['tmp_name'])>0){		
		
		$datos=getimagesize($_FILES['carpeta']['tmp_name']); 
        if ($datos['mime']=='image/jpeg'){$extension='.jpg';}
        if ($datos['mime']=='image/png'){$extension='.png';}
        if ($datos['mime']=='image/gif'){$extension='.gif';}
			
		$carpeta1="../imagenes/banner/";
		$nombre="1_".time('m:s');
		$ancho=$datos[0];
		$alto=$datos[1];
		$respuesta=subir_imagen($_FILES['carpeta']['tmp_name'],$carpeta1,$nombre,$ancho,$alto,$extension);
		$carpeta="../imagenes/banner/".$nombre.$extension;		
		@unlink($_POST['carpeta']);		
	
	} else {
		
	$carpeta=$_POST['carpeta'];
		
	}
	



	

	include('conexion.php');
	$sql=@mysql_query("UPDATE banner SET contenido='".$contenido."',url='".$url."',estado='".$estado."',imagen='".$carpeta."' WHERE idx='".$idx."'",$conecta);
	@mysql_close($conecta);
	$mensaje= '<div class="alert alert-success"><button data-dismiss="alert" class="close" type="button">&times;</button><h4>Resultados</h4><p style="margin: 8px 0">Se ha realizado el cambio con exito!</p></div>';				
		
}


if ($editar=="Guardar"){
	
	$url=$_POST['url'];
	
    $contenido.=$_POST['titulo'].'~';
    $contenido.=$_POST['subtitulo'].'~';
    $contenido.=$_POST['contenido'].'~';
    $contenido.=$_POST['boton'].'~';
    $contenido.=$_POST['precio'].'~';


	$contenido=str_replace("'",'"',$contenido);
	$contenido=($contenido);

	$estado=$_POST['estado'];
				
	include("data/funciones/nimagenB.php");
		
	if(strlen($_FILES['carpeta']['tmp_name'])>0){		
		
		$datos=getimagesize($_FILES['carpeta']['tmp_name']); 
        if ($datos['mime']=='image/jpeg'){$extension='.jpg';}
        if ($datos['mime']=='image/png'){$extension='.png';}
        if ($datos['mime']=='image/gif'){$extension='.gif';}
			
		$carpeta1="../imagenes/banner/";
		$nombre="1_".time('m:s');
		$ancho=$datos[0];
		$alto=$datos[1];
		$respuesta=subir_imagen($_FILES['carpeta']['tmp_name'],$carpeta1,$nombre,$ancho,$alto,$extension);
		$carpeta="../imagenes/banner/".$nombre.$extension;		
		@unlink($_POST['carpeta']);		
	
	} else {
		
	$carpeta=$_POST['carpeta'];
		
	}


		
	$campos="(contenido,tipo,url,estado,imagen)";
	$datos="('".$contenido."','".$tipo."','".$url."','".$estado."','".$carpeta."')";
	
	include('conexion.php');
	$sql=@mysql_query("INSERT INTO banner ".$campos." values ".$datos,$conecta);
	@mysql_close($conecta);
	$mensaje='<div class="alert alert-success"><button data-dismiss="alert" class="close" type="button">&times;</button><h4>Resultados</h4><p style="margin: 8px 0">Se ha realizado el registro con exito!</p></div>';				
		
} 


if($metodo=='eliminar'){ 

	if ($confirmacion=='si'){


	include('conexion.php');


	$sql=@mysql_query("delete from banner where idx=".$dato,$conecta);	
	@mysql_close($conecta);
	echo '<meta http-equiv=refresh content=0;URL=menu.php?accion=2A&tipo='.$tipo.'>';

	}
	
?>
	<? if ($confirmacion==''){?>
    
        <div id="tab2" style="position: absolute; left: 50%; top: 50%; width: 350px; height: 150px; margin: -100px 0 0 -150px; z-index:9999; background:#fff; border:2px solid #cc0000; text-align:center;">
        <div style="background:#cc0000; line-height:40px; padding:0 15px; color:#fff; font-size:15px; font-weight:bold; text-align:left;">Atenci&oacute;n</div>
        
        <div style="color:#555; padding:15px; font-size:13px;">&iquest;Esta seguro de eliminar el registro?</div>
        
            <a href="menu.php?accion=2A&tipo=<? echo $tipo;?>" style="height:28px; line-height:28px; padding:0 15px; color:#fff; font-size:12px; background:#444444; display:inline-block;">Cancelar</a>
            <a href="menu.php?accion=2A&metodo=eliminar&tipo=<? echo $tipo;?>&dato=<? echo $dato;?>&confirmacion=si" style="height:28px; line-height:28px; padding:0 15px; color:#fff; font-size:12px; background:#cc0000; display:inline-block;">Aceptar</a>
        
        </div>
        
        <div id="tab3" style="display:block; position:absolute; background:rgba(0,0,0,0.5); z-index:9998; width:100%; height:1550px; top:0; left:0;"></div>
   
   <? } ?>

<? } ?>




<script type="text/javascript" src="js/listado-jquery.js"></script>
<script type="text/javascript" src="js/listado.js"></script>

<script type="text/javascript">

$(document).ready(function(){ 
						   
    $(function() {
    	
    	$("#contenido ul").sortable({opacity: 0.6, cursor: 'move', update: function() {
    		
    		var order = $(this).sortable("serialize") + '&metodo=orden';
    		$.post("", order, function(theResponse){}); 	
    															 
    	}								  
    	});
    });
	
}); 

</script>


<style>
    
input[type=date]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    display: none;
}
</style>



        <div class="pageheader">
	        <div class="pageicon"><span class="iconfa-th-list"></span></div>
            <div class="pagetitle">
                <h5>Banner</h5>
                <h1><? echo ucfirst(str_replace('-',' ',$tipo));?></h1>
            </div>
        </div>


        
        <div class="maincontent">
            <div class="maincontentinner">
            
				<? echo $mensaje; ?>
                
                <? if ($metodo=='modificar' AND $dato>0){
                            
                include('conexion.php');
                $consulta=@mysql_query('select * from banner where idx='.$dato,$conecta);
                @mysql_close($conecta);
                $resultado=@mysql_fetch_assoc($consulta);
                $idx=$resultado['idx'];
				
                $d=explode('~',($resultado['contenido']));				
				$fecha_inicio=$d[0];
				$fecha_finaliza=$d[1];	
							
				$url=$resultado['url'];
				$estado=$resultado['estado'];
                $carpeta=$resultado['imagen'];
             
                
                    if($editar=='eliminar-image'){ 
                        @unlink($carpeta);
                        include('conexion.php');
                        $sql=@mysql_query("update banner set imagen='' where idx=".$idx,$conecta);	
                        @mysql_close($conecta);
                        echo '<meta http-equiv=refresh content=0;URL=menu.php?accion=2A&metodo=modificar&tipo='.$tipo.'&dato='.$idx.'>';
                    }


                
                }
    
                
                ?>
                        
            <div class="row-fluid">
 

                <div id="dashboard-left" class="span8">
                
                	<h4 class="widgettitle"><? echo ucfirst(str_replace('-',' ',$tipo));?></h4>
                
                    <div class="widgetcontent nopadding">
            
            
            			<form action="<? $PHP_SELF ?>"  method="post" enctype="multipart/form-data"  class="stdform stdform2" autocomplete="off">
            
                            <input type="hidden" name="idx" id="idx" value="<? echo $idx;?>" /> 	
                            <input type="hidden" name="carpeta" id="carpeta" value="<? echo $carpeta;?>" />
           				
                        <? if ($mod_galeria=="si"){?> 


                        <p>
                            <label>Categoria</label>
                            
                            <span class="field">
                            
                                <select id="titulo" name="titulo" style="width:350px" tabindex="2" onChange='tipo(this.form)'>                                


                                
                                <option value="">Elija una categoría...</option>

                                    <? 
                                        //MENU
                                        include('conexion.php');    
                                        $sql_cate=@mysql_query("SELECT * from banner where tipo = '".str_replace('-galeria','',$tipo)."' ORDER BY orden ASC", $conecta);
                                        @mysql_close($conecta); 
                            
                                        while ($info_cate = @mysql_fetch_assoc($sql_cate)) {
                                            $v_cate=explode('~',($info_cate['contenido']));?> 
                                            
                                            <option value="<? echo $v_cate[0];?>" <? if ($v_cate[0]==$_GET['titulo'] OR $v_cate[0]==$d[0]){?>selected<? } ?>><? echo $v_cate[0];?></option>
                                            
                                            
                                                            
                                        <? }
                                    
                                    ?> 
                                
                                </select>
                            </span>
                        </p>

                        <? } ?>


                            <? if ($mod_titulo=="si"){?> 
            				
                            <p>
                                <label>Titulo <? if (!empty($maxlength_titulo)){?><small>Maximo <? echo $maxlength_titulo;?> caracteres.</small><? } ?></label>
                                <span class="field"><input type="text" id="titulo" name="titulo" class="input-block-level"  value="<? echo $d[0];?>" <? if (!empty($maxlength_titulo)){?>maxlength="<? echo $maxlength_titulo;?>"<? } ?> /></span>
                            </p>

                            <? } ?>

                            <? if ($mod_subtitulo=="si"){?> 
                            
                            <p>
                                <label>Subtitulo <? if (!empty($maxlength_subtitulo)){?><small>Maximo <? echo $maxlength_subtitulo;?> caracteres.</small><? } ?></label>
                                <span class="field"><input type="text" id="subtitulo" name="subtitulo" class="input-block-level"  value="<? echo $d[1];?>" <? if (!empty($maxlength_subtitulo)){?>maxlength="<? echo $maxlength_subtitulo;?>"<? } ?> /></span>
                            </p>

                            <? } ?>                            

                            <? if ($mod_contenido=="si"){?> 
            				
                            <p>
                                <label>Contenido <? if (!empty($maxlength_contenido)){?><small>Maximo <? echo $maxlength_contenido;?> caracteres.</small><? } ?></label>
                                <span class="field">
                                	<textarea rows="3" class="input-xxlarge" name="contenido" id="contenido" <? if (!empty($maxlength_contenido)){?>maxlength="<? echo $maxlength_contenido;?>"<? } ?>><? echo $d[2];?></textarea>
                                </span>
                            </p>

                            <? } ?>

                            <? if ($mod_boton=="si"){?> 
                            
                            <p>
                                <label>Boton (call to action)</label>
                                <span class="field"><input type="text" id="boton" name="boton" value="<? echo $d[3];?>" /></span>
                            </p>

                            <? } ?>   

                            <? if ($mod_precio=="si"){?> 
                            
                            <p>
                                <label>Precio</label>
                                <span class="field"><input type="text" id="precio" name="precio" value="<? echo $d[4];?>" /></span>
                            </p>

                            <? } ?>                                                       
    

    						<? if ($mod_fecha=="si"){?> 
                            <p>
                                <label>Fecha inicio</label>
                                <span class="field"><input id="fecha_inicio" name="fecha_inicio" type="date" value="<? echo $fecha_inicio;?>" /></span>
                            </p> 
    						
                            <p>
                                <label>Fecha finaliza</label>
                                <span class="field"><input id="fecha_finaliza" name="fecha_finaliza" type="date" value="<? echo $fecha_finaliza;?>" /></span>
                            </p> 

                            <? } ?>



                        
                            <? if ($mod_enlace=="si"){?> 

                            
                            <p>
                                <label>Enlace</label>
                                <span class="field"><input type="text" id="url" name="url" class="input-block-level" value="<? echo $url;?>" /></span>
                            </p>
                            <!--
                            <p>
                                <label>Target</label>
                                <span class="field">
                                    <select id="target" name="target" class="input-small">
                                        <option value=""></option>
                                        <option value="_blank" <? if ($d[2]=="_blank"){?>selected<? } ?>>_blank</option>
                                        <option value="_self" <? if ($d[2]=="_self"){?>selected<? } ?>>_self</option>
                                    </select>
                                </span>
                            </p>
                            -->  

                            <? } ?>


                        
                                                

                            <div class="par">
                        
            
                            <label>Imagen <small>Recomendado: <? echo $ancho_banner;?>x<? echo $alto_banner;?> pixeles</small></label>
            
            
                            <div class="field">
							
							<? if(is_file($carpeta)){?>

                            	<img src="<? echo $carpeta;?>" style="max-width:400px; background:#efefef;"/>
            
            				<? } ?>

                            <div class="fileupload fileupload-new" data-provides="fileupload">
                            <div class="input-append">
                            <div class="uneditable-input span3">
                            <i class="iconfa-file fileupload-exists"></i>
                            <span class="fileupload-preview"></span>
                            </div>
                            <span class="btn btn-file"><span class="fileupload-new">Ingresar</span>
                            <span class="fileupload-exists">Cambiar</span>
                            <input type="file" name="carpeta" id="carpeta" accept="image/gif, image/jpeg, image/png"/></span>
                            <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Eliminar</a>
                            </div>
                            
                            
                            <? if(is_file($carpeta)){?>
                            
	                            <? if ($metodo=='modificar'){?>
	                                <a href="menu.php?accion=2A&editar=eliminar-image&metodo=modificar&tipo=<? echo $tipo;?>&dato=<? echo $idx;?>" title="Eliminar">
	                                <span class="iconsweets-trashcan" style="height:28px; margin:0 5px;"></span>
	                                </a>                
	                           
	                            <? } ?>

                            <? } ?>
                            
                            </div>
                            
                            </div>
                            
                       		</div> 


                            <p>
                            <label>Estado</label>
                            
                            <span class="field">
                            <input type="checkbox" name="estado" id="estado" value="si" <? if (strlen($estado)>0){if ($estado=='si'){echo 'checked="checked"';}} else { 

                                if (empty($metodo)){?>checked="checked"<? }} ?> />
                            </span>
                            
                            </p>


	


							<p class="stdformbutton"> 
                            
								<? if ($metodo=='modificar'){?>
                                
                                <input class="btn btn-primary" type="submit" id="editar" name="editar" value="Modificar" style="border:0; height:32px; float:left; margin:0 5px 0 0;"/>
                                

                                <input class="btn btn-danger alertdanger" type="submit" name="metodo" id="metodo" value="Eliminar" style="border:0; height:32px; float:left; margin:0 5px 0 0;"/>
                                <a href="menu.php?accion=2A&tipo=<? echo $tipo;?>" class="btn">Limpiar</a>   
                                
                                <? } else {?> 
                                
                                <input class="btn btn-primary" type="submit" id="editar" name="editar" value="Guardar" style="border:0; height:32px;  float:left; margin:0 5px 0 0;"/>
                                <a href="menu.php?accion=2A&tipo=<? echo $tipo;?>" class="btn">Limpiar</a>         
                                
                                <? } ?>
                                
                             </p>
                             
                             
                         </form>
                        

                    	</div>
                    
            	</div>
                    
                    
                        
  					<?
                            include('conexion.php');

							//ORDEN
							$update_listado = $_POST['listado'];
							
								if ($metodo == "orden"){
																							
									$lista = 1;
									
									foreach ($update_listado as $valor) {
										
										$sql=@mysql_query("UPDATE banner SET orden='".$lista."' where idx = '".$valor."'",$conecta);
										$lista = $lista + 1;	
									}
									
								}



                            if ($mod_galeria=='si'){

                                if (empty($_GET['titulo'])) {
                                    $tipo='';
                                } 

                                if (empty($v_cate[0])) {
                                    $tipo='';
                                } 

                                    
                                if (!empty($_GET['titulo'])){

                                   $like_titulo=limpiarLIKE($_GET['titulo']);
                                   $tipo=$_GET['tipo'];

                                } 


                                if (!empty($d[0])){

                                   $like_titulo=limpiarLIKE($d[0]);
                                   $tipo=$_GET['tipo'];

                                }
                                
                                

                                if (!empty($like_titulo)) { 

                                    $LIKE="AND contenido LIKE '%".$like_titulo."%'";
                                }

                            }


							$consulta2=@mysql_query("SELECT * from banner WHERE tipo = '".$tipo."' $LIKE ORDER BY orden ASC", $conecta);
                            @mysql_close($conecta);	
                          	$registros2 = @mysql_num_rows($consulta2);	          
            		?>
            

						<div id="dashboard-right" class="span4">
                    

						<div class="widgetbox">  
                                              
                        <div class="headtitle">
                        
                            <h4 class="widgettitle">Listado (<? echo $registros2;?>)</h4>

                        </div>
                        
                        <div class="widgetcontent">


                        <div id="contenido" class="tabbedwidget tab-primary">


                            						
							<? if ($registros2>0){?>
                            
                            <ul class="userlist">
                            
							<?											
                            while ($resultado2 = @mysql_fetch_assoc($consulta2)) { 
                            $idx2=$resultado2['idx'];                           
                            $orden2=$resultado2['orden']; 
                            $url2=$resultado2['url'];
                            $contenido2=explode('~',($resultado2['contenido']));
							$image2=$resultado2['imagen'];
							$estado2=$resultado2['estado'];

							?>



                            <li id="listado_<? echo $idx2;?>" style="border:1px solid #ccc; background:#f0f0f0; margin:0 0 5px 0; display:block; text-align:left; padding:5px;">
                            
                                <div style="height:35px; line-height:35px;">
                                
                                    <a href="menu.php?accion=2A&metodo=modificar&tipo=<? echo $tipo;?>&dato=<? echo $idx2;?>" title="modificar" style="color:#333;"><img src="<? echo $image2;?>" style="float:left; width:35px; height:35px; padding:0 10px 0 0;"/>                                        
                                        

                                    	<? if (!empty($contenido2[0])){?> 
                                    	<? echo (ucfirst(strtolower(substr($contenido2[0],0,30))));?></a>

                                    	<? } else {?> 

                                            <? echo $tipo;?>

                                        <? } ?>

                                        <? if ($resultado2['estado']=="si"){?><span style="border-radius: 3px; background: #2ecc71; color:#fff; font-size: 12px; padding:2px;">activo</span><? } else {?><span style="border-radius: 3px; background: #f39c12; color:#fff; font-size: 12px; padding:2px;">desactivado</span><? } ?>

                                    <a href="menu.php?accion=2A&metodo=eliminar&tipo=<? echo $tipo;?>&dato=<? echo $idx2;?>" title="Eliminar" style="float:right; width:50px; line-height:35px; text-align:center; border-left:1px solid #ccc;"><span class="icon-trash"></span></a>
                                    <a href="menu.php?accion=2A&metodo=modificar&tipo=<? echo $tipo;?>&dato=<? echo $idx2;?>" title="modificar" style="float:right; width:50px; line-height:35px; text-align:center; border-left:1px solid #ccc;"><span class="icon-edit"></span></a>
                           		
                                </div>
                                
                            </li>

						

							<? } ?>

                            </ul>
                            
                            <? } else {?>
                            
                            
                            <div class="alert alert-info">
                              <strong>Ups!</strong> No se han encontrado resultados para tu b&uacute;squeda
                            </div>
                            
                            
                            
                            <? } ?>

                        
                        </div>


                        </div>
                        
                        </div>


					 </div>	
                           

         </div>    
            
            
            </div>
        </div>


<script language='JavaScript'> 
function tipo(listar){ 
if (listar.titulo.selectedIndex != 0) 
{location.href = 'menu.php?accion=2A&tipo=aparts-galeria&titulo='+listar.titulo.options[listar.titulo.selectedIndex].value;}}
</Script>            

