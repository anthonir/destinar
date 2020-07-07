<? session_start();	if (!isset($_COOKIE['activo'])) { session_destroy(); header('refresh:0; url=index.php'); exit(); }


$tipo=saneaVar($_GET['tipo']); 
$editar=saneaVar($_GET['editar']); 
$enviar=saneaVar($_POST["Enviar"]); 


if ($tipo=='servicios'){$mod_titulo="si";$mod_subtitulo="si";$mod_contenido="si";}
if ($tipo=='home'){$mod_titulo="si";$mod_subtitulo="si"; $mod_contenido=""; $mod_imagen="si";$ancho_banner=800;$alto_banner=800; }
if ($tipo=='aparts'){$mod_titulo="si"; $mod_subtitulo="si";$mod_contenido="si";}




if ($enviar=="Guardar" ){

include('conexion.php');

include("data/funciones/nimagenB.php");

$contenido.=$_POST['t0'].'~';
$contenido.=$_POST['t1'].'~';
$contenido.=$_POST['t2'].'~';
$contenido.=$_POST['t3'].'~';

$contenido=str_replace("'",'"',($contenido));
$idx=saneaVar($_POST['idx']); 

//carpeta
if(strlen($_FILES['carpeta']['tmp_name'])>0){       
     
    
    if ($_FILES['carpeta']['type']=="application/pdf"){

        //pdf
        $uploadDir = '../imagenes/contenidos/';
        $carpeta = $uploadDir."1_".time('m:s').".pdf";
        move_uploaded_file($_FILES['carpeta']['tmp_name'], $carpeta);

        @unlink($_POST['carpeta']);

    } else {

        //image
        $datos=getimagesize($_FILES['carpeta']['tmp_name']); 

        if ($datos['mime']=='image/jpeg'){$extension='.jpg';}
        if ($datos['mime']=='image/png'){$extension='.png';}
        if ($datos['mime']=='image/gif'){$extension='.gif';}

        $carpeta1="../imagenes/contenidos/";
        $nombre="1_".time('m:s');
        $ancho=$datos[0];
        $alto=$datos[1];
        $respuesta=subir_imagen($_FILES['carpeta']['tmp_name'],$carpeta1,$nombre,$ancho,$alto,$extension);
        $carpeta="../imagenes/contenidos/".$nombre.$extension;      
        @unlink($_POST['carpeta']); 
    }    

} else {

    $carpeta=$_POST['carpeta'];

}

$sql=@mysql_query("update contenido set contenido='".$contenido."',carpeta='".$carpeta."',tipo='".$tipo."' where idx='".$idx."'",$conecta);


$mensaje= '<div class="alert alert-success"><button data-dismiss="alert" class="close" type="button">&times;</button><h4>Resultados</h4><p style="margin: 8px 0">Se ha realizado el cambio con exito!</p></div>';				 
			
}





?>

<script src="js/jquery.cleditor.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery(".textarea").cleditor({ controls: "bold italic underline link source" })[0].focus();
    });
</script>




        <div class="pageheader">
	        <div class="pageicon"><span class="iconfa-list"></span></div>
            <div class="pagetitle">
                <h5>Contenido</h5>
                <h1><? echo str_replace('-',' ',ucfirst($tipo));?></h1>
            </div>
        </div>
        
        <div class="maincontent">
            <div class="maincontentinner">
            
            <? echo $mensaje; ?>
           
            <div class="widgetbox">
                <h4 class="widgettitle"><? echo str_replace('-',' ',ucfirst($tipo));?></h4>
                <div class="widgetcontent nopadding">
                 <form action="<? $PHP_SELF ?>"  method="post" enctype="multipart/form-data" class="stdform stdform2" autocomplete="off">
                 
				<?

                include('conexion.php');
                $sql=@mysql_query('SELECT * from contenido where tipo="'.$tipo.'"',$conecta);
                $registro=@mysql_fetch_assoc($sql);
                $contenido=@explode('~',($registro['contenido']));
                $idx=$registro['idx'];
				$carpeta=$registro['carpeta'];

                    if($editar=='eliminar-image'){ 
                        @unlink($carpeta);
                        include('conexion.php');
                        $sql=@mysql_query("update contenido set carpeta='' where idx=".$idx,$conecta);  
                        echo '<meta http-equiv=refresh content=0;URL=menu.php?accion=5A&tipo='.$tipo.'>';
                    }

                    

                ?>                 
                    
                 <input name="idx" id="idx" type="hidden"  value="<? echo $idx;?>"/>
                 <input name="carpeta" id="carpeta" type="hidden"  value="<? echo $carpeta;?>"/>
                        
                            <? if ($mod_titulo=="si"){?>                   
                            <p>
                                <label style="font-weight:normal;">Titulo</label>
                                <span class="field"><input name="t0" id="t0" type="text" class="input-xxlarge" value="<? echo $contenido[0];?>"/></span>
                            </p>
                            <? } ?>

                            <? if ($mod_subtitulo=="si"){?>  
                            <p>
                                <label style="font-weight:normal;">Subtitulo</label>
                                <span class="field"><textarea name="t1" id="t1" rows="5" class="input-xxlarge"><? echo $contenido[1];?></textarea></span>
                            </p>
                            <? } ?>
                            

                            
                            <? if ($mod_contenido=="si"){?>  
                            <p>
                                <label style="font-weight:normal;">Contenido</label>
                                <span class="field"><textarea name="t2" id="t2" rows="10" class="input-xxlarge textarea"><? echo $contenido[2];?></textarea></span>
                            </p>
                            <? } ?>
                            


            <? if ($mod_imagen=="si"){?>   

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
                
                    
                    <a href="menu.php?accion=5A&editar=eliminar-image&tipo=<? echo $tipo;?>" title="Eliminar">
                    <span class="iconsweets-trashcan" style="height:28px; margin:0 5px;"></span>
                    </a>                
                   
                    

                <? } ?>
                
                </div>
                
                </div>

			</div>
            <? } ?>

           


            
            
                    <p class="stdformbutton">
                    <input class="btn btn-primary" type="submit" id="Enviar" name="Enviar" value="Guardar" style="border:0; height:32px;"/>
                   </p>

                    </form>
                </div>
            </div>
            
            
            </div>
        </div>
