
<div class="m3">


    <? if ($seccion=='servicios'){?>
    
		<?

        $query=@mysql_query("SELECT * FROM contenido WHERE tipo = 'servicios'");
        $row=@mysql_fetch_assoc($query);
		$contenido=explode('~',($row['contenido']));
        ?>

        <section class="inner-banner">
            <div class="thm-container">
                <h2><? echo $contenido[0];?></h2>
            </div>
        </section>
    
        
        <div class="container">

            <div class="b7">

                <div class="item">
                 
                    <ul class="content4-slider">
                        
                        <?
                        $query_banner=@mysql_query("SELECT * FROM banner WHERE tipo='servicios' AND estado='si' ORDER BY orden ASC");
                        while($row_banner=@mysql_fetch_assoc($query_banner)){
                        $imagen=str_replace('../','',$row_banner['imagen']);
                        ?>             
                            <li>
                                <div class="img">
                                    <img src="<?php echo $imagen; ?>?v=<? echo $version;?>" />
                                </div>
                            </li>         

                        <? } ?>                      

                    </ul>

                </div>

            <div class="clear"></div>
            </div>              
            
            <div class="b8">

                <div class="title"><? echo $contenido[1];?></div>
                <div class="content"><? echo $contenido[2];?></div>

            <div class="clear"></div>
            </div>

        <div class="clear"></div>
        </div>
    
    <? } ?>


    <? if ($seccion=='aparts'){?>


        <?

        $query=@mysql_query("SELECT * FROM contenido WHERE tipo = '".$seccion."'");
        $row=@mysql_fetch_assoc($query);
        $contenido=explode('~',($row['contenido']));


        ?>

            <section class="inner-banner">
                <div class="thm-container">
                    <h2><? echo $contenido[0];?></h2>
                </div>
            </section>
        


            <div class="b3">
                
                <div class="item-info">
                    <div class="text-title"><? echo $contenido[1];?></div>
                    <div class="text-content"><? echo $contenido[2];?></div>
                </div>

            <div class="clear"></div>
            </div>        


            <div class="b2">

                <div class="item">

                    <ul class="content6-slider">

                        <? 

                        $imagen=''; $contenido='';


                        $query= @mysql_query("SELECT * FROM banner WHERE tipo = '".$seccion."' AND estado = 'si' ORDER BY orden ASC");

                        while ($row = @mysql_fetch_assoc($query)) {

                            $imagen=str_replace('../','',$row['imagen']);
                            $contenido=explode('~',($row['contenido']));


                        ?>
                           

                                <li>

                                    <div class="item-info">

                                        
                                            


                                            <div class="img">

                                                <?


                                                    $query2=@mysql_query("SELECT * FROM banner WHERE tipo = 'aparts-galeria' AND contenido LIKE '%".limpiarLIKE($contenido[0])."%' AND estado = 'si' ORDER BY orden ASC");
                                                    $rows2=@mysql_num_rows($query2);


                                                    if ($rows2>0){?>

                                                        <a href="<? echo $imagen;?>" class="fancybox" rel="gallery<? echo $row['idx'];?>"><img src="<? echo $imagen;?>"></a>

                                                        <? while ($row2 = @mysql_fetch_assoc($query2)) {

                                                            $imagen2=str_replace('../','',$row2['imagen']);

                                                            ?>

                                                            <a href="<? echo $imagen2;?>" class="fancybox" rel="gallery<? echo $row['idx'];?>"></a>

                                                        <? }

                                                    } else {?>


                                                        <img src="<? echo $imagen;?>">


                                                    <? }


                                                ?>
                                            
                                            </div>

                                            <div class="text-box">

                                                <div class="title"><? echo $contenido[0];?></div>
                                                <div class="subtitle"><? echo $contenido[1];?></div>
                                                <div class="price">ARS <? echo $contenido[4];?></div>
                                                <a href="<? echo $reserva_online;?>"><div class="cta">Reservar ahora</div></a>                                                                        

                                            </div>


                                    </div>

                               </li>

                           
                            
                        <? } ?>

                    </ul>

                </div>

            <div class="clear"></div>
            </div>              
            



      
    <? } ?>            

    <? if ($seccion=='contacto'){?> 

        <?
        $nombre=saneaVar($_POST['nombre']);
        $telefono=saneaVar($_POST['telefono']);
        $email=@mysql_real_escape_string(saneaVar($_POST['email']));
        $mensaje=saneaVar($_POST['mensaje']);


            if(isset($_POST['web2'])){
                $web2 = $_POST['web2'];
            }

            if(isset($_POST['mail2'])){
                $mail2 = $_POST['mail2'];
            }
                        
            if ($mail2 == '' && $web2 == 'http://') {   
                    
                    
                if (strlen($nombre)>0 AND strlen($telefono)>0 AND strlen($email)>0 AND strlen($mensaje)>0) {
        
                    //marketing
                    $fecha=date('d/m/y H:m');
                    $query_marketing=mysql_query("SELECT * FROM clientes_marketing WHERE email='".$email."'");
                    $row_marketing=@mysql_fetch_assoc($query_marketing);

                    if(empty($row_marketing['nro_cli'])){

                        $insert_query_marketing=@mysql_query("INSERT INTO `clientes_marketing` (`fecha`, `email`) VALUES ('".$fecha."', '".$email."');");

                    }

        
                    $subject = $empresa_web." - Contacto";
                    $message .= "<b>DATOS DEL CLIENTE</b><br>";
                    $message .= "Nombre: ".$nombre."<br>";
                    $message .= "Teléfono: ".$telefono."<br>";
                    $message .= "Email: ".$email."<br>";
                    $message .= "Mensaje: ".$mensaje."<br>";
                    $headers  = "MIME-Version: 1.0\r\n";
                    $headers .= "Content-type: text/html; charset=utf-8\r\n";
                    $headers .= "To: <".$email_web.">\r\n";
                    $headers .= "From: <".$email_web."> \r\n";
                    @mail($to, $subject, $message, $headers);
                    @header('location:?gracias');                    
                
                }
            }
        ?> 


        <?php if (isset($_GET['gracias'])){?>
        
            <div class="notification success alert-message">Hemos recibido tu mensaje. A la brevedad te responderemos, Muchas gracias!</div>
            
            <? echo $conversion;?>

            <script type="text/javascript">

                $(document).ready(function() {
                    setTimeout(function() {
                        $(".alert-message").fadeOut(1500);
                    },3000);
                });

            </script>            
            
        <? } ?>

        <div class="container">

            <!-- <div class="b9">

                <iframe frameborder="0" scrolling="yes" marginheight="0" marginwidth="0" src="http://maps.google.com.ar/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=<? echo $direccion_web;?>&amp;aq=&amp;vpsrc=0&amp;ie=UTF8&amp;hq=&amp;hnear=<? echo $direccion_web;?>&amp;t=m&amp;z=14&amp;iwloc=r1&amp;output=embed"></iframe>
            
            <div class="clear"></div>
            </div> -->


            <div class="b10">

                <form action="" method="POST">
                
                    <h1>Escribinos</h1>
            
                    <div style="display:none;">
                        <input type="text" id="mail2" name="mail2" />
                        <input type="text" id="web2" name="web2" value="http://" />
                    </div>                
                    
                    <label>Nombre*</label>
                    <input type="text" id="nombre" name="nombre" required>
                    
                    <label>Email*</label>
                    <input type="email" id="email" name="email" required>
                    
                    <label>Teléfono*</label>
                    <input type="tel" id="telefono" name="telefono" required>
                    
                    <label>Consulta*</label>
                    <textarea id="mensaje" name="mensaje"></textarea>

                    <button type="submit">Enviar</button>

                </form>
            
            <div class="clear"></div>
            </div>

            <div class="b10">

                <ul>

                    <? if (!empty($horario_web)){?> 
                        <li>

                            <span>
                                <i class="fa fa-clock-o"></i> Horarios
                            </span>

                            <p>
                                <? echo $horario_web;?>
                            </p>


                        </li>
                    <? } ?>                   
            
                    <? if (!empty($direccion_web)){?>
                        <li>

                            <span>
                                <i class="fa fa-location-arrow"></i> Ubicación
                            </span>

                            <a href="<? echo $google_como_llegar;?>" target="_blank"><? echo $direccion_web;?></a>
                        </li>
                    <? } ?>  

                    <? if (!empty($telefono_web)){?>
                  <li>
                      <span>
                          <i class="fa fa-phone"></i> Teléfono
                      </span>

                      <a href="tel:<? echo $telefono_web;?>"><? echo $telefono_web;?></a>
                  </li>
                    <? } ?>

                    <? if (!empty($whatsapp_web)){?>
                    <li>
                        <span>
                            <i class="fa fa-whatsapp"></i> Whatsapp
                        </span>

                        <a href="javascript:;" class="whatsapp"><? echo $whatsapp_web;?></a>
                    </li>
                    <? } ?>    

                </ul>
            
            <div class="clear"></div>
            </div>

        <div class="clear"></div>
        </div>

    <? } ?>
    


<div class="clear"></div>
</div>
