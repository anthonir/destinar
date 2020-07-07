<div class="leftpanel">

        <div class="leftmenu">        
            <ul class="nav nav-tabs nav-stacked">
               
               <li class="nav-header">Nevagaci&oacute;n</li>
                
               <? if ($_SESSION['usuario']=='admin'){?> 

                   <li class="dropdown <? if ($accion=='3A') {echo 'active';}?>"><a href=""><span class="iconfa-globe"></span> Seo</a>

                        <ul <? if ($accion=='3A' AND strlen($_GET['tipo'])>0) {echo 'style="display:block;"';}?>>                                    
                            <li <? if ($accion=='3A' AND $_GET['tipo']=='home'){?>class="active"<? } ?>><a href="menu.php?accion=3A&tipo=home">Home</a></li>
                            <li <? if ($accion=='3A' AND $_GET['tipo']=='aparts'){?>class="active"<? } ?>><a href="menu.php?accion=3A&tipo=aparts">Aparts</a></li>
                            <li <? if ($accion=='3A' AND $_GET['tipo']=='servicios'){?>class="active"<? } ?>><a href="menu.php?accion=3A&tipo=servicios">Servicios</a></li>
                            <li <? if ($accion=='3A' AND $_GET['tipo']=='contacto'){?>class="active"<? } ?>><a href="menu.php?accion=3A&tipo=contacto">Contacto</a></li>
                         
                        </ul>              
                   </li>

               <? } ?> 



                <? if ($_SESSION['usuario']=='admin'){?> 

                    <li class="<? if ($accion=='4A') {echo 'active';}?>"><a href="menu.php?accion=4A"><span class="iconfa-laptop"></span> Info</a></li>

                <? } ?>

               <li class="dropdown <? if ($accion=='2A') {echo 'active';}?>"><a href=""><span class="iconfa-picture"></span> Banner</a>

                    <ul <? if ($accion=='2A' AND strlen($_GET['tipo'])>0) {echo 'style="display:block;"';}?>>   

                        <? if ($_SESSION['usuario']=='admin'){?>                                  
                        <li <? if ($accion=='2A' AND $_GET['tipo']=='principal'){?>class="active"<? } ?>><a href="menu.php?accion=2A&tipo=principal">Principal</a></li>
                        <? } ?>

                        <? if ($_SESSION['usuario']=='admin'){?>                                  
                        <li <? if ($accion=='2A' AND $_GET['tipo']=='secundarios'){?>class="active"<? } ?>><a href="menu.php?accion=2A&tipo=secundarios">Secundarios</a></li>
                        <? } ?>

                        <li <? if ($accion=='2A' AND $_GET['tipo']=='promociones'){?>class="active"<? } ?>><a href="menu.php?accion=2A&tipo=promociones">Promociones</a></li>
                        
                        <? if ($_SESSION['usuario']=='admin'){?><li <? if ($accion=='2A' AND $_GET['tipo']=='servicios'){?>class="active"<? } ?>><a href="menu.php?accion=2A&tipo=servicios">Servicios</a></li><? } ?>
                        

                        <? if ($_SESSION['usuario']=='admin'){?>
                        <li class="dropdown"><a href="">Aparts</a>
                           <ul <? if ($accion=='2A' AND ($_GET['tipo']=="aparts" OR $_GET['tipo']=="aparts-galeria")) {echo 'style="display:block;"';}?>>

                                <li <? if ($accion=='2A' AND $_GET['tipo']=="aparts"){echo 'class="active"';}?> ><a href="menu.php?accion=2A&tipo=aparts">Listar</a></li>
                                <li <? if ($_GET['tipo']=="aparts-galeria"){echo 'class="active"';}?> style="border:0;"><a href="menu.php?accion=2A&tipo=aparts-galeria">Galeria</a></li>
                           
                           </ul>
                        </li>
                        <? } ?>
                        
                    </ul>              
               </li>

               
                <? if ($_SESSION['usuario']=='admin'){?>
                <li class="dropdown <? if ($accion=='5A' AND strlen($_GET['tipo'])>0) {echo 'active';}?>"><a href=""><span class="iconfa-list"></span> Contenidos</a>
                    <ul <? if ($accion=='5A' AND strlen($_GET['tipo'])>0) {echo 'style="display:block;"';}?>>
                        
                        <li <? if ($accion=='5A' AND $_GET['tipo']=='home'){echo 'class="active"';}?>><a href="menu.php?accion=5A&tipo=home">Home</a></li>
                        
                        <li <? if ($accion=='5A' AND $_GET['tipo']=='aparts'){echo 'class="active"';}?>><a href="menu.php?accion=5A&tipo=aparts">Aparts</a></li>
                        <li <? if ($accion=='5A' AND $_GET['tipo']=='servicios'){echo 'class="active"';}?>><a href="menu.php?accion=5A&tipo=servicios">Servicios</a></li>
                        
                   </ul>
                </li>
                <? } ?>


                <li><a href="data/contenido/exportar_newsletter.php" target="_blank"><span class="iconfa-download-alt"></span>Exportar newsletter</a></li>

              
            </ul>
        </div>
        
</div>