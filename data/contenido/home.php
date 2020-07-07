<div id="banner">
   
    <section class="home-main">
        <div style="position: absolute; right: 10px; top: 10px;">
            <!-- <div id="TT_JWnwLxdhtnncMFIKjfqEk1kk1WnK14SFrY1YEZC5q1D"></div>
            <script type="text/javascript" src="https://www.tutiempo.net/s-widget/l_JWnwLxdhtnncMFIKjfqEk1kk1WnK14SFrY1YEZC5q1D"></script>  -->
            <div id="cont_a07e974099b31298821bf3d26fb16985"><script type="text/javascript" async src="https://www.meteored.mx/wid_loader/a07e974099b31298821bf3d26fb16985"></script></div>
        </div>
        <div class="home-container">
         
            

           <h1>Destinar Apart Hotel</h1>
           <p class="h1-subt">Rodeado por un hermoso bosque, a metros del mar y cerca del centro,
                Destinar, goza de una ubicación y un paisaje privilegiado. </p>
        </div>

       <!--iframe id="tabla" src="dev/TABLA/index.php" frameborder="0"></iframe-->
       
    </section>

</div>

<? 

$imagen=''; $contenido='';

$query=@mysql_query("SELECT * FROM banner WHERE tipo = 'promociones' AND estado = 'si' ORDER BY orden ASC");
$rows=mysql_num_rows($query);

if ($rows>0){?> 

<div class="m2">

    <div class="b1">

        
        <div class="head-title">
            <h2>¡Aprovecha nuestras promociones!</h2>
            <p>Con una forestación privilegiada, calidad de servicio y el más alto nivel de diseño en cada uno de nuestros  espacios, garantizan  una vivencia exclusiva en nuestro Apart </p>
        </div>


        <div class="item">

            <ul class="content2-slider">

                <? 

                while ($row =@mysql_fetch_assoc($query)) {

                    $imagen=str_replace('../','',$row['imagen']);
                    $contenido=explode('~',$row['contenido']);


                ?>
                   

                        <li>

                            <div class="item-info">

                                <a href="#box_<?php echo $row['idx'];?>" class="various">
                                    
                                    <div class="img">

                                        <img src="<? echo $imagen;?>">
                                    
                                    </div>

                                    <div class="text-box">

                                        <div class="title"><? echo $contenido[0];?></div>
                                        <div class="subtitle"><? echo $contenido[1];?></div>
                                        <?php if ($contenido[4] != ''): ?>
                                           <div class="price">ARS <? echo $contenido[4];?></div> 
                                        <?php endif ?>
                                        
                                        <a href="https://hotels.cloudbeds.com/reservation/vGYC4D" class="cta">Reservar ahora</a>                                                                        

                                    </div>

                                    <? if (!empty($contenido[2])){?> 
                                        <div id="box_<?php echo $row['idx'];?>" style="display: none;">
                                            <h1><b><? echo $contenido[0];?></b></h1>
                                            <p style="display: block; padding:10px 0 15px 0;"><? echo str_replace(array("\r\n", "\r", "\n"), "<br />",$contenido[2]);?></p>
                                            <a href="https://hotels.cloudbeds.com/reservation/vGYC4D" style="color: #000;background: #fff;border: 2px solid #000;height: 34px;line-height: 34px; font-size: 16px; display:inline-block;padding: 0 10px; font-weight: 700;">Reservar ahora</a>
                                        </div>

                                    <? } ?>

                                </a>

                            </div>

                       </li>

                   
                    
                <? } ?>

            </ul>

        </div>

    <div class="clear"></div>
    </div>

<div class="clear"></div>
</div>
<? } ?>


<div class="m7" style="display:none" >

    <div class="b1">

         <h2 style="text-transform: initial!important;" >A 100 metros del Mar y 300 del centro</h2> 

        <div class="item">

            <ul class="content8-slider">

                <? 

                $imagen=''; $contenido='';

                $query=@mysql_query("SELECT * FROM banner WHERE tipo = 'secundarios' AND estado = 'si' ORDER BY orden ASC  LIMIT 10");

                while ($row =@mysql_fetch_assoc($query)) {

                    $imagen=str_replace('../','',$row['imagen']);

                ?>
                   

                        <li><img src="<? echo $imagen;?>"></li>                   
                    
                <? } ?>

            </ul>

        </div>
 
    <div class="clear"></div>
    </div>

<div class="clear"></div>
</div>

<div class="m1">

    <div class="b1 seccion-bienvenida">

        <? 

            $imagen=''; $url='';
            $query=mysql_query("SELECT * FROM contenido WHERE tipo = 'home'");
            $row = mysql_fetch_assoc($query);
            $imagen=str_replace('../','',$row['carpeta']);
            $contenido=explode('~',($row['contenido']));


        ?>

        <div class="img">
            <img src="<? echo $imagen;?>">
        </div>

        <div class="title"><h2>Bienvenido a Destinar</h2></div>

            <p>Nuestro Apart, se encuentra situado a metros de la playa y muy cerca del centro comercial. Ofrece confort único para gozar de una increíble estadía.</p>
            <p>Podrás relajarte y disfrutar de experiencias únicas. Se encuentra a pasos del mar y está rodeado por un hermoso bosque, al momento de confirmar tu reserva estarás dando un gran paso para comenzar con unas vacaciones inolvidables. Contamos con actividades para toda la familia.
                Las habitaciones de Destinar están decoradas con suelo de baldosa y muebles elegantes. Todas cuentan con microondas, minibar y baño privado.</p>
            <p>Nuestros clientes dicen que esta parte de Cariló es su favorita, según los comentarios independientes.</p>


        <a href="contacto">Contacto</a>
 
    <div class="clear"></div>
    </div>

<div class="clear"></div>
</div>


<div class="m4">

    <div class="b1">

        <div class="title">Excelente Apart en Carilo. Ideal para vacaciones</div>
        <div class="content">Apart Destinar, <H2> Alquiler Apart en Carilo </H2></div>
        <p>Nos ubicamos en el atractivo y exclusivo bosque de Carilo, a pocos metros del mar. Contamos con un rápido acceso a los encantos del bosque y a la más variada vida nocturna; restaurantes, centros comerciales y artesanales. </p>

        <ul>

            <li><i class="fa fa-check"></i> Wifi Gratis</li>
            <li><i class="fa fa-check"></i> Desayuno Incluido</li>
            <li><i class="fa fa-check"></i> Salas de juegos</li>
            <li><i class="fa fa-check"></i> Piscina Exterior</li>            
            <li><i class="fa fa-check"></i> Piscina interior climatizada</li>
            <li><i class="fa fa-check"></i> Aire acondicionado</li>
            <li><i class="fa fa-check"></i> Estacionamiento para cuatriciclos y vtv sin cargado (máx. 12) </li>
            <li><i class="fa fa-check"></i> Solarium</li>
            <li><i class="fa fa-check"></i> Playstation</li>
            


        </ul>


        <div class="features-option">

            <div class="single-features-option">

                <div class="icon-box">
                    <img src="imagenes/iconos/1.png">
                </div>
                <div class="text-box">
                    <p>Free WiFi<br> Access</p>
                </div>

            </div>

            <div class="single-features-option">

                <div class="icon-box">
                    <img src="imagenes/iconos/2.png">
                </div>
                <div class="text-box">
                    <p>Desayuno<br> Incluido</p>
                </div>
                
            </div>            

            <div class="single-features-option">

                <div class="icon-box">
                    <img src="imagenes/iconos/3.png">
                </div>
                <div class="text-box">
                    <p>Piscina <br> climatizada</p>
                </div>
                
            </div>            

        </div>

            

        </ul>
       




    <div class="clear"></div>
    </div>

<div class="clear"></div>
</div>   


<div class="m6">

    <div class="b1">
        
        <h2 style="text-transform: initial;" >Destinar, un lugar soñado</h2> 
        <p>Disfrutá de la Playa, El bosque y el Mar en un solo lugar. Escapate a Carilo</p>
        
        <div class="item">
        
            <ul class="content7-slider">
        
                <li class="d1 activo">
                
                    <div class="avatar">
                    
                        <div class="img">
                            <img src="imagenes/iconos/destinar-carilo-hotel-buenos-aires-carilo.png" alt="Destinar Hotel Buenos Aires Carilo" />
                        </div>
                        
                        
                    </div>
                    
                    <div class="content">
                        
                        <div class="title">“Excelente (9.2/10)”</div>
                        <div class="description">¡Somos #1<br />en Clientes Satisfechos!</div>
                        
                    </div>
    
                </li>
                <li class="d1">
                
                    <div class="avatar">
                    
                        <div class="img">
                            <img src="https://graph.facebook.com/v2.9/10206913271523102/picture?type=square&height=64&width=64" alt="Hotel en Buenos Aires Carilo" />
                        </div>
                        
                        <span>Maria</span>
                        
                    </div>
                    
                    <div class="content">
                        
                        <div class="title">“La atención es muy buena”</div>
                        <div class="description">El dpto muy cómodo amplio. Las sabanas y toallas impecables. Las dos piletas muy cómodas y los jacuzzis re calentitios</div>
                        
                    
                    </div>
    
                </li> 
                 <li class="d1">
                
                    <div class="avatar">
                    
                        <div class="img">
                            <img src="https://graph.facebook.com/v2.9/10220795498902144/picture?type=square&height=64&width=64" alt="Hotel en Buenos Aires Carilo" />
                        </div>
                        
                        <span>Maria</span>
                        
                    </div>
                    
                    <div class="content">
                        
                        <div class="title">“Excelente atención”</div>
                        <div class="description">El personal siempre predispuesto. El área de la pileta climatizada a una temperatura ideal. El desayuno súper completo Para recomendar sin dudas</div>
                        
                    
                    </div>
    
                </li> 
    
                <li class="d1">
                
                    <div class="avatar">
                    
                        <div class="img">
                            <img src="https://media-cdn.tripadvisor.com/media/photo-l/1a/f6/de/5a/default-avatar-2020-36.jpg" alt="Hotel en Buenos Aires Carilo" />
                        </div>
                        
                        <span>Ines M</span>
                        
                    </div>
                    
                    <div class="content">
                        
                        <div class="title">“Excelente Atención”</div>
                        <div class="description">Habitaciones equipadas con horno,microondas,anafe,heladera, ropa de cama muy buena,cambio de las mismas al igual de las toallas y toallones diario, muy completo el desayuno y un lugar muy tranquilo para ir con chicos ya que cuenta en el sub suelo con sala de juegos para chicos y grandes.</div>
                        
                    
                    </div>
    
                </li> 
                  
    
                <li class="d1">
                
                    <div class="avatar">
                    
                        <div class="img">
                            <img src="https://media-cdn.tripadvisor.com/media/photo-l/1a/f6/e2/e6/default-avatar-2020-45.jpg" alt="Hotel en Carilo" />
                        </div>
                        
                        <span>g0nzamiriam</span>
                        
                    </div>
                    
                    <div class="content">
                        
                        <div class="title">“Fin de semana”</div>
                        <div class="description">Un Hotel muy bien ubicado. Con un trato muy cordial. Sumamente limpio. Las habitaciones grandes con un baño muy confortable también, muy luminoso. El desayuno muy bueno, hay desayuno para celiacos,previa aviso.</div>
                        
                    
                    </div>
    
                </li>   
    
                <li class="d1">
                
                    <div class="avatar">
                    
                        <div class="img">
                            <img src="https://media-cdn.tripadvisor.com/media/photo-l/1a/f6/e9/ef/default-avatar-2020-66.jpg" alt="Hotel en Buenos Aires Carilo" />
                        </div>
                        
                        <span>Nicolas</span>
                        
                    </div>
                    
                    <div class="content">
                        
                        <div class="title">“Aniversario”</div>
                        <div class="description">Excelente lugar con una atención impecable. Limpieza 10 puntos y servicios óptimos. La pileta climatizada muy buena y el desayuno más que satisfactorio.</div>
                        
                    
                    </div>
    
                </li>   
    
                <li class="d1">
                
                    <div class="avatar">
                    
                        <div class="img">
                            <img src="https://media-cdn.tripadvisor.com/media/photo-l/1a/f6/f1/79/default-avatar-2020-21.jpg" alt="Hotel en Carilo" />
                        </div>
                        
                        <span>Ana D</span>
                        
                    </div>
                    
                    <div class="content">
                        
                        <div class="title">"Días espectaculares"</div>
                        <div class="description">Unos días geniales, en un hotel espectacular con un servicio de primera. Estuvimos muy cómodos y tranquilos, las instalaciones son realmente excelentes. Muy buenos los servicios, y muy atento el personal.  Carilo bellísimo.</div>
                        
                    
                    </div>
    
                </li> 
    
                <li class="d1">
                
                    <div class="avatar">
                    
                        <div class="img">
                            <img src="https://media-cdn.tripadvisor.com/media/photo-l/1a/f6/ef/9c/default-avatar-2020-14.jpg" alt="Hotel En Buenos Aires Carilo" />
                        </div>
                        
                        <span>Marcelo C</span>
                        
                    </div>
                    
                    <div class="content">
                        
                        <div class="title">“Nueva opción en Carilo”</div>
                        <div class="description">Un excelente lugar que no conocíamos.  Vinimos por recomendación de unos amigos y superó nuestras expectativas. Muy lindo hotel con todo lo que uno necesita para descansar y relajarse. Nos tocaron un par de días feos pero pudimos disfrutar de las instalaciones</div>
                        
                    
                    </div>
    
                </li>   
        

        </ul>

    </div>  
        
    <div class="clear"></div>
    </div>
    

<div class="clear"></div>
</div>
