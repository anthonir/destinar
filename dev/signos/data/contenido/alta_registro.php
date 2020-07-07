<?php session_start();	if (!isset($_COOKIE['activo'])) { session_destroy(); header('refresh:0; url=index.php'); exit(); }


$tipo=saneaVar($_GET['tipo']); 
$enviar=saneaVar($_POST["Enviar"]); 
$dato=saneaVar($_GET['dato']);
$confirmacion=saneaVar($_GET['confirmacion']);

if (strlen($_POST['editar'])>0){$editar=saneaVar($_POST['editar']);} else {$editar=saneaVar($_GET['editar']);}
if (strlen($_POST['metodo'])>0){$metodo=saneaVar($_POST['metodo']);} else {$metodo=saneaVar($_GET['metodo']);}


if ($tipo=='precio-mes'){$mod_titulo="no";$mod_subtitulo="si";$mod_mese="si";}
if ($tipo=='usuarios'){$mod_titulo="no";$mod_subtitulo="no";$mod_usuario="si"; }
if ($tipo=='tipo-habitación'){$mod_titulo="si";$mod_subtitulo="si";}
//if ($tipo=='servicios'){$ancho_banner=600;$alto_banner=600;} 


include('conexion.php');

if ($enviar=="Guardar" ){

    
    
    include('conexion.php');

    if ($tipo == 'usuarios') {
     
         $campos="(name,fecha,estado,telefono)";
        $datos="('".$_POST['name']."',now(),'".$_POST['estado']."','".$_POST['telefono']."')";

        $sql=@mysql_query("INSERT INTO usuarios_banner ".$campos." values ".$datos, $conecta);
        @mysql_close($conecta);
        $mensaje='<div class="alert alert-success"><button data-dismiss="alert" class="close" type="button">&times;</button><h4>Resultados</h4><p style="margin: 8px 0">Se ha realizado el registro con exito!</p></div>';
    }

    if ($tipo == 'precio-mes') {

        $campos="(mes,estado,precio_lun_juev,precio_vier_doming,id_habitacion)";
        $datos="('".$_POST['mes']."','".$_POST['estado']."','".$_POST['precio_lun_juev']."','".$_POST['precio_vier_doming']."','".$_POST['id_habitacion']."')";

        $sql=@mysql_query("INSERT INTO precio_meses ".$campos." values ".$datos, $conecta);
        @mysql_close($conecta);
        $mensaje='<div class="alert alert-success"><button data-dismiss="alert" class="close" type="button">&times;</button><h4>Resultados</h4><p style="margin: 8px 0">Se ha realizado el registro con exito!</p></div>';    
    }

    if ($tipo == 'tipo-habitación') {

        $name=$_POST['name'];
        $estado=$_POST['estado'];   
        $campos="(name,estado)";
        $datos="('".$name."','".$estado."')";

        $sql=@mysql_query("INSERT INTO tipo_habitacion ".$campos." values ".$datos, $conecta);
        @mysql_close($conecta);
        $mensaje='<div class="alert alert-success"><button data-dismiss="alert" class="close" type="button">&times;</button><h4>Resultados</h4><p style="margin: 8px 0">Se ha realizado el registro con exito!</p></div>';  
    }



			
}

if ($enviar=="Modificar"){
    
    
    

    $idx=saneaVar($_POST['idx']); 
   

    if ($tipo == 'usuarios') {
        $estado=$_POST['estado'];
         $sql=@mysql_query("UPDATE usuarios_banner SET estado='".$estado."' WHERE id='".$idx."'", $conecta);
        @mysql_close($conecta);
        $mensaje= '<div class="alert alert-success"><button data-dismiss="alert" class="close" type="button">&times;</button><h4>Resultados</h4><p style="margin: 8px 0">Se ha realizado el cambio con exito!</p></div>';
    }

    if ($tipo == 'precio-mes') {
        $estado=$_POST['estado'];
        $sql=@mysql_query("UPDATE precio_meses SET mes='".$_POST['mes']."', estado='".$estado."', precio_lun_juev= '".$_POST['precio_lun_juev']."', precio_vier_doming='".$_POST['precio_vier_doming']."', id_habitacion='".$_POST['id_habitacion']."' WHERE id='".$idx."'", $conecta);
        @mysql_close($conecta);
        $mensaje= '<div class="alert alert-success"><button data-dismiss="alert" class="close" type="button">&times;</button><h4>Resultados</h4><p style="margin: 8px 0">Se ha realizado el cambio con exito!</p></div>';
    }

    if ($tipo == 'tipo-habitación') {
        $estado=$_POST['estado'];
        $name = $_POST['name'];
        include('conexion.php');
        $sql=@mysql_query("UPDATE tipo_habitacion SET name='".$name."', estado='".$estado."' WHERE id='".$idx."'", $conecta);
        @mysql_close($conecta);
        $mensaje= '<div class="alert alert-success"><button data-dismiss="alert" class="close" type="button">&times;</button><h4>Resultados</h4><p style="margin: 8px 0">Se ha realizado el cambio con exito!</p></div>';        
    }
    
        
}



if($metodo=='eliminar'){ 

    if ($confirmacion=='si'){


    include('conexion.php');

    if ($tipo == 'usuarios') {
         
    }

    if ($tipo == 'precio-mes') {
        
        $sql=@mysql_query("UPDATE precio_meses SET estado = 0 where id = ".$dato, $conecta);  
        @mysql_close($conecta);
        echo '<meta http-equiv=refresh content=0;URL=menu.php?accion=6A&tipo='.$tipo.'>';
    }
    if ($tipo == 'tipo-habitación') {
        $sql=@mysql_query("UPDATE tipo_habitacion SET estado = 0 where id = ".$dato, $conecta);  
        @mysql_close($conecta);
        echo '<meta http-equiv=refresh content=0;URL=menu.php?accion=6A&tipo='.$tipo.'>';
    }
    

    }
    
?>
    <?php if ($confirmacion==''){?>
    
        <div id="tab2" style="position: absolute; left: 50%; top: 50%; width: 350px; height: 150px; margin: -100px 0 0 -150px; z-index:9999; background:#fff; border:2px solid #cc0000; text-align:center;">
        <div style="background:#cc0000; line-height:40px; padding:0 15px; color:#fff; font-size:15px; font-weight:bold; text-align:left;">Atenci&oacute;n</div>
        
        <div style="color:#555; padding:15px; font-size:13px;">&iquest;Esta seguro de eliminar el registro?</div>
        
            <a href="menu.php?accion=6A&tipo=<?php echo $tipo;?>" style="height:28px; line-height:28px; padding:0 15px; color:#fff; font-size:12px; background:#444444; display:inline-block;">Cancelar</a>
            <a href="menu.php?accion=6A&metodo=eliminar&tipo=<?php echo $tipo;?>&dato=<?php echo $dato;?>&confirmacion=si" style="height:28px; line-height:28px; padding:0 15px; color:#fff; font-size:12px; background:#cc0000; display:inline-block;">Aceptar</a>
        
        </div>
        
        <div id="tab3" style="display:block; position:absolute; background:rgba(0,0,0,0.5); z-index:9998; width:100%; height:1550px; top:0; left:0;"></div>
   
   <?php } ?>

<?php } ?>

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




        <div class="pageheader">
	        <div class="pageicon"><span class="iconfa-list"></span></div>
            <div class="pagetitle">
                <h5>Registros</h5>
                <h1><?php echo str_replace('-',' ',ucfirst($tipo));?></h1>
            </div>
        </div>
        
        <div  id="dashboard-left" class="span8" >
            <div class="maincontentinner">
            
            <?php echo $mensaje; ?>
           
            <div class="widgetbox">
                <h4 class="widgettitle"><?php echo str_replace('-',' ',ucfirst($tipo));?></h4>
                <div class="widgetcontent nopadding">
                 <form action="<?php $PHP_SELF ?>"  method="post" enctype="multipart/form-data" class="stdform stdform2" autocomplete="off">
                <?php 
                
                if ($metodo=='modificar' AND $dato >0){

                    if ($tipo == 'tipo-habitación') {
                        include('conexion.php');
                        $consulta=@mysql_query('select * from tipo_habitacion where id ='.$dato,$conecta);
                        @mysql_close($conecta);
                        $resultado=@mysql_fetch_assoc($consulta);
                       
                    }
                    if ($tipo == 'precio-mes') {
                         include('conexion.php');
                        $consulta=@mysql_query('SELECT precio_meses.*, tipo_habitacion.name from precio_meses INNER JOIN tipo_habitacion ON precio_meses.id_habitacion = tipo_habitacion.id where  precio_meses.estado = 1 and precio_meses.id ='.$dato,$conecta);
                        @mysql_close($conecta);
                        $resultado=@mysql_fetch_assoc($consulta);
                        $mes=$resultado['mes'];
                        $precio_lun_juev=$resultado['precio_lun_juev'];
                        $precio_vier_doming=$resultado['precio_vier_doming'];
                        $id_habitacion_selected=$resultado['id_habitacion'];

                    }

                    if ($tipo == 'usuarios') {
                        include('conexion.php');
                        $consulta=@mysql_query('select * from usuarios_banner where id ='.$dato,$conecta);
                        @mysql_close($conecta);
                        $resultado=@mysql_fetch_assoc($consulta);
                        $telefono=$resultado['telefono'];
                        $reserva=$resultado['reserva'];
                    }

                    $idx=$resultado['id'];
                    $name=$resultado['name'];
                    $estado=$resultado['estado'];
                            
                    

                    
                }
    
                
                ?>
                <input name="idx" id="idx" type="hidden"  value="<?php echo $idx;?>"/>
                 
                        
                            <?php if ($mod_titulo=="si") { ?>                   
                            <p>
                                <label style="font-weight:normal;">Nombre</label>
                                <span class="field"><input name="name" id="name" type="text"  value="<?php echo $name;?>"/></span>
                            </p>
                            <?php } ?>

                            <?php if ($mod_mese=="si") { ?>                   
                            <p>
                                <label style="font-weight:normal;">Mes</label>
                                <span class="field"><input name="mes" id="mes" type="text"  value="<?php echo $mes;?>"/></span>
                            </p>
                            <p>
                                <label style="font-weight:normal;">Precio de Lunes A Jueves</label>
                                <span class="field"><input name="precio_lun_juev" id="precio_lun_juev" type="text"  value="<?php echo $precio_lun_juev;?>"/></span>
                            </p>
                            <p>
                                <label style="font-weight:normal;">Precio de Viernes A Domingo</label>
                                <span class="field"><input name="precio_vier_doming" id="precio_vier_doming" type="text"  value="<?php echo $precio_vier_doming;?>"/></span>
                            </p>
                             <p>
                                <label style="font-weight:normal;">Tipo Habitación</label>
                                <span class="field">
                                     <select name="id_habitacion" id="id_habitacion" >
                                        <?php                                         
                                        include('conexion.php');
                                        $sql_cate=@mysql_query("select * from tipo_habitacion where estado = 1", $conecta);

                                        @mysql_close($conecta); 
                                        
                                        while ($info_cate = @mysql_fetch_assoc($sql_cate)) {
                                           
                                           ?> 
                                           <option value="<?php echo $info_cate['id'];?>" <?php if ($info_cate['id']==$id_habitacion_selected){?> selected <?php } ?>><?php echo $info_cate['name'];?></option>
                                       <?php } ?> 
                                    </select>
                                </span>
                            </p>
                            <?php } 

                            if ($mod_usuario == "si") {
                                ?>
                                <p>
                                <label style="font-weight:normal;">Nombre</label>
                                <label style="font-weight:normal;"><?php echo $name; ?></label>
                            </p>
                                 <p>
                                    <label style="font-weight:normal;">Reserva</label>
                                    <label style="font-weight:normal;"><?php echo $reserva; ?></label>
                                </p>
                                <p>
                                    <label style="font-weight:normal;">Teléfono</label>
                                    <label style="font-weight:normal;"><?php echo $telefono; ?></label>
                                </p>
                                <p>
                                    <label style="font-weight:normal;">Estado</label>
                                    <span class="field">
                                        <select name="estado" id="estado" >
                                            <option value="Contactado" <?php if ($estado=="Contactado"): ?> selected <?php endif ?> >Contactado</option>
                                            <option value="Sin Contacto" <?php if ($estado=="Sin Contacto"): ?> selected <?php endif ?>>Sin Contacto</option>
                                        </select>
                                    </span>
                                </p>
                                <?php
                                
                            }

                            ?>

                            <?php if ($mod_subtitulo=="si"){?>  
                            <p>
                                <label style="font-weight:normal;">Estado</label>
                                <span class="field">
                                    <select name="estado" id="estado" >
                                        <option value="1" <?php if ($estado==1): ?> selected <?php endif ?> >Activo</option>
                                        <option value="0" <?php if ($estado==0): ?> selected <?php endif ?>>Desactivo</option>
                                    </select>
                                </span>
                            </p>
                            <?php } ?>
                                        
                    <p class="stdformbutton">
                    <?php if ($metodo=='modificar'){?>    
                    <input class="btn btn-primary" type="submit" id="Enviar" name="Enviar" value="Modificar" style="border:0; height:32px;"/>
                      <?php } else {?> 
                    <input class="btn btn-primary" type="submit" id="Enviar" name="Enviar" value="Guardar" style="border:0; height:32px;"/>    
                     <?php } ?>   
                   </p>

                    </form>
                </div>
            </div>
            
            
            </div>
        </div>

        <div class="span6">
            <div class="widgetbox">  

                <div class="headtitle">
                    <?php
                        if ($tipo == 'tipo-habitación') {
                            include('conexion.php');
                            $consulta2=@mysql_query('SELECT * from tipo_habitacion where estado = 1 ',$conecta);
                            @mysql_close($conecta); 
                            $registros2 = @mysql_num_rows($consulta2);
                        } 

                        if ($tipo == 'usuarios') {
                            include('conexion.php');
                            $consulta2=@mysql_query('SELECT * from usuarios_banner ORDER BY id DESC ; ',$conecta);
                            @mysql_close($conecta); 
                            $registros2 = @mysql_num_rows($consulta2);

                        }

                        if ($tipo == 'precio-mes') {
                            include('conexion.php');
                            $consulta2=@mysql_query('SELECT precio_meses.*, tipo_habitacion.name from precio_meses INNER JOIN tipo_habitacion ON precio_meses.id_habitacion = tipo_habitacion.id where  precio_meses.estado = 1 ',$conecta);
                            @mysql_close($conecta); 
                            $registros2 = @mysql_num_rows($consulta2);                            
                        }    
                    ?>  
                    <h4 class="widgettitle">Listado (<?php echo $registros2;?>)</h4>
                </div>
                <div class="widgetcontent">
                    <div class="tabbedwidget tab-primary">   

                            <?php if ($registros2>0)
                            {
                                ?>
                            
                            <ul class="userlist">
                            
                            <?php
                            
                            while ($resultado2 = @mysql_fetch_assoc($consulta2)) { 
                            
                            $idx2=$resultado2['id'];                           
                            $name=$resultado2['name']; 
                            $estado2=$resultado2['estado'];

                            if ($tipo == 'precio-mes') {
                                
                                $mes = $resultado2['mes'];
                                $precio_lun_juev = $resultado2['precio_lun_juev'];
                                $precio_vier_doming = $resultado2['precio_vier_doming'];
                            }


                            ?>



                            <li id="listado_<?php echo $idx2;?>" style="border:1px solid #ccc; background:#f0f0f0; margin:0 0 5px 0; display:block; text-align:left; padding:5px;">

                                
                            
                                <div style="height:35px; line-height:35px;">
                                    <a href="menu.php?accion=6A&metodo=modificar&tipo=<?php echo $tipo;?>&dato=<?php echo $idx2;?>" title="modificar" style="color:#333;"><span><?php echo $name;?></span>
                                    <?php 
                                        if ($tipo == 'precio-mes') {
                                            echo $mes.' | Lun-jue $'.$precio_lun_juev.' | vie-dom $'.$precio_vier_doming;

                                        }
                                         if ($tipo == 'usuarios') {
                                            echo ' | Cel:'.$resultado2['telefono'].' ';

                                        }
                                        ?>


                                    
                                    <?php 
                                    if ($tipo != 'usuarios') {
                                        if ($resultado2['estado']=="1"){?><span style="border-radius: 3px; background: #2ecc71; color:#fff; font-size: 12px; padding:2px;">activo</span><?php } else {?><span style="border-radius: 3px; background: #f39c12; color:#fff; font-size: 12px; padding:2px;">desactivado</span><?php } 
                                    }
                                    else
                                    {
                                        if ($resultado2['estado']=="Contactado"){ ?><span style="border-radius: 3px; background: #2ecc71; color:#fff; font-size: 12px; padding:2px;">Contactado</span><?php } else { ?><span style="border-radius: 3px; background: #f39c12; color:#fff; font-size: 12px; padding:2px;">Sin Contacto</span><?php }

                                    }
                                    ?>
                                    </a>

                                    <a href="menu.php?accion=6A&metodo=eliminar&tipo=<?php echo $tipo;?>&dato=<?php echo $idx2;?>" title="Eliminar" style="float:right; width:50px; line-height:35px; text-align:center; border-left:1px solid #ccc;"><span class="icon-trash"></span></a>
                                    <a href="menu.php?accion=6A&metodo=modificar&tipo=<?php echo $tipo;?>&dato=<?php echo $idx2;?>" title="modificar" style="float:right; width:50px; line-height:35px; text-align:center; border-left:1px solid #ccc;"><span class="icon-edit"></span></a>
                                    
                                
                                </div>
                                
                            </li>

                        

                            <?php 
                            
                            } ?>

                            </ul>
                            
                            <?php } else {?>
                            
                            
                            <div class="alert alert-info">
                              <strong>Ups!</strong> No se han encontrado resultados para tu b&uacute;squeda
                            </div>
                            
                            
                            
                            <?php } ?>

                        
                    </div>
                </div>            
            </div>
        </div>
                
