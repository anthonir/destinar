<div class="header">
        <div class="logo">
        <a href="menu.php"><img src="images/logo.png" alt="" /></a>
        </div>
        <div class="headerinner">
            <ul class="headmenu">

                <li>
                    <a href="index.php?session=salir">
                    <span class="count"></span>
                    <span class="head-icon head-salir"></span>
                    <span class="headmenu-label">Salir</span>
                    </a>
                </li>

                <? if ($_SESSION['usuario']=='admin'){?>
                <li class="right">
                    <div class="userloggedinfo">
                        <img src="images/photos/logo.jpg" alt="">
                        <div class="userinfo">
                        
						<?
                        include('conexion.php');
                        $sql_info='select * from info';
                        $datos_info=@mysql_query($sql_info,$conecta);
                        $reg_info=@mysql_fetch_assoc($datos_info);
                        $t_info=@explode('~',$reg_info['contenido']);
                        ?> 
                
                            <h5><? echo $t_info[11];?> <small> - <? echo $t_info[0];?></small></h5>
                            <ul>
                                <li><a href="menu.php?accion=4A">Editar</a></li>
                               <li><a href="index.php?session=salir">Salir</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <? } ?>




            </ul>
        </div>
    </div>