<? session_start(); if (!isset($_COOKIE['activo'])) { session_destroy(); header('refresh:0; url=index.php'); exit(); }

$tipo=saneaVar($_GET['tipo']);

if ($_POST["Enviar"]=="Guardar" ){

include('conexion.php');

$contenido.=$_POST['t0'].'~';
$contenido.=$_POST['t1'].'~';

$idx=saneaVar($_POST['idx']);

$contenido=str_replace("'",'"',$contenido);
$contenido=($contenido);

$query=@mysql_query("UPDATE seo SET contenido='".$contenido."' WHERE idx='".$idx."'");  
@mysql_close($conecta);

header('location:menu.php?accion=3A&tipo='.$tipo);


            
}

?>
        
        <div class="pageheader">
            <div class="pageicon"><span class="iconfa-globe"></span></div>
            <div class="pagetitle">
                <h5>Seo</h5>
                <h1><? echo str_replace('-',' ',ucfirst($tipo));?></h1>
            </div>
        </div>
        
        <div class="maincontent">
            <div class="maincontentinner">
            

                <? echo $mensaje;?>
               
               <div class="row-fluid">

                   <div id="dashboard-left" class="span8">
                        

                        <div class="widgetbox">
                            <h4 class="widgettitle">Administrar</h4>
                            <div class="widgetcontent nopadding">
                             <form action="<? $PHP_SELF ?>" method="post" enctype="multipart/form-data" class="stdform stdform2" autocomplete="off">
                             
                            <?
                            include('conexion.php');
                            $sql=mysql_query("SELECT * FROM seo WHERE tipo ='".$tipo."'");
                            $rows=mysql_num_rows($sql);
                            
                            $registro=mysql_fetch_assoc($sql);
                            $t=@explode('~',($registro['contenido']));
                            $idx=$registro['idx'];
                            
                            ?>                 
                                
                             <input name="idx" id="idx" type="hidden" value="<? echo $idx;?>"/>
                                                            
                                        <p>
                                            <label style="font-weight:normal;">Titulo <small>Maximo 67 caracteres.</small></label>
                                            <span class="field"><input name="t0" id="t0" type="text" class="input-block-level" maxlength="67"  value="<? echo $t[0];?>"/>
                                          </span>
                                        </p>
                                        

                                        <p> 
                                            <label style="font-weight:normal;">Descrición <small>Maximo 155 caracteres.</small></label>
                                            <span class="field"><textarea cols="80" rows="3" name="t1" id="t1" class="span5" maxlength="155"><? echo $t[1];?></textarea></span>
                                        </p>                           
                
                                        <p class="stdformbutton">
                                            <input class="btn btn-primary" type="submit" id="Enviar" name="Enviar" value="Guardar" style="border:0; height:32px;"/>
                                        </p>

                                </form>
                            </div>
                        </div>

                     </div>
                    
                    <div id="dashboard-left" class="span4">

                        <div class="widgetbox">
                            <h4 class="widgettitle">Preview</h4>
                            <div class="widgetcontent">

                                <div style="color:#1a0dab; font-size: 18px; padding: 0; margin:0; display: block;font-family: arial,sans-serif;"><? echo $t[0];?></div>
                                <div style="color:#006621; font-size: 14px; padding: 2px 0 3px 0; margin: 0; display: block;font-family: arial,sans-serif;"><? echo $t_info[12];?><? echo $tipo;?></div>
                                <div style="color:#545454; line-height: 1.4;    font-size: small;word-wrap: break-word;padding: 0; margin:0;font-family: arial,sans-serif;"><? echo $t[1];?></div>
                            </div>
                        </div>

                    </div>

                </div>
            
            </div>
        </div>
