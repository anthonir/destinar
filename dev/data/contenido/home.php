


<div id="banner">
   
    <section class="home-main">
        <div class="home-container">
           <h1>Destinar Apart Hotel</h1>
           <p class="h1-subt">Rodeado por un hermoso bosque, a metros del mar y cerca del centro,
                Destinar, goza de una ubicación y un paisaje privilegiado. </p>
        </div>
      

       <iframe id="tabla" src="TABLA/index.php" frameborder="0"></iframe>
       
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
            <p>Con una forestación privilegiada, calidad de servicio y el más alto nivel de diseño en cada uno de nuestros  espacios, garantizan  una vivencia exclusiva. </p>
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
                                        <div class="price">ARS <? echo $contenido[4];?></div>
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


<div class="m7">

    <!--div class="b1">

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
    </div-->

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
            <p>El restaurante del establecimiento está especializado en platos de comida internacional.</p>
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
                            <img src="https://media-cdn.tripadvisor.com/media/photo-s/01/2e/70/82/avatar003.jpg" alt="Hotel en Buenos Aires Carilo" />
                        </div>
                        
                        <span>Rodolfo T</span>
                        
                    </div>
                    
                    <div class="content">
                        
                        <div class="title">“Excelente Atención”</div>
                        <div class="description">Un lugar hermoso para descansar. La habitación amplia con todos sus detalles. me toco con hidromasajes. El desayuno super variado.</div>
                        
                    
                    </div>
    
                </li>   
    
                <li class="d1">
                
                    <div class="avatar">
                    
                        <div class="img">
                            <img src="https://media-cdn.tripadvisor.com/media/photo-s/01/2a/fd/97/avatar.jpg" alt="Hotel en Carilo" />
                        </div>
                        
                        <span>M Celeste T</span>
                        
                    </div>
                    
                    <div class="content">
                        
                        <div class="title">“Muy buena experiencia”</div>
                        <div class="description">El lugar ideal para descansar. La piscina climatizada con hidromasaje esta muy buena. El desayuno estuvo exquisto. Y el servicio es muy bueno.</div>
                        
                    
                    </div>
    
                </li>   
    
                <li class="d1">
                
                    <div class="avatar">
                    
                        <div class="img">
                            <img src="https://media-cdn.tripadvisor.com/media/photo-s/01/2e/70/7a/avatar061.jpg" alt="Hotel en Buenos Aires Carilo" />
                        </div>
                        
                        <span>Vanesa78</span>
                        
                    </div>
                    
                    <div class="content">
                        
                        <div class="title">“Increible, como siempre”</div>
                        <div class="description">Visite por segunda vez este hotel y lo unico que tengo para decir son maravillas. El staff como siempre muy atento y servicial.</div>
                        
                    
                    </div>
    
                </li>   
    
                <li class="d1">
                
                    <div class="avatar">
                    
                        <div class="img">
                            <img src="https://media-cdn.tripadvisor.com/media/photo-o/06/56/93/26/facebook-avatar.jpg" alt="Hotel en Carilo" />
                        </div>
                        
                        <span>Maria S</span>
                        
                    </div>
                    
                    <div class="content">
                        
                        <div class="title">"Vacaciones Verano 2018"</div>
                        <div class="description">Muy agradecidos al Hotel Destinar por su gran atención y confort en todos los espacios. Entretenimiento para los niños completo al 100 % (los niños muy contentos)</div>
                        
                    
                    </div>
    
                </li> 
    
                <li class="d1">
                
                    <div class="avatar">
                    
                        <div class="img">
                            <img src="https://media-cdn.tripadvisor.com/media/photo-l/01/2a/fd/a0/avatar.jpg" alt="Hotel En Buenos Aires Carilo" />
                        </div>
                        
                        <span>Nicolas T</span>
                        
                    </div>
                    
                    <div class="content">
                        
                        <div class="title">“Increíble estancia!”</div>
                        <div class="description">El hotel está realmente bien, las habitaciones eran muy cómodas y grandes. Todo el mundo fue muy agradable y servicial!</div>
                        
                    
                    </div>
    
                </li>   
        

        </ul>

    </div>  
        
    <div class="clear"></div>
    </div>
    

<div class="clear"></div>
</div>
