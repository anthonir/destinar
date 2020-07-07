<?php
include_once("../conexion.php");

if($_REQUEST['empid']) {
	
	$consulta2=@mysql_query("SELECT * FROM precio_meses WHERE estado = 1 and id_habitacion ='".$_REQUEST['empid']."'",$conecta);
	mysql_close($conecta2);
	?>
			 
				
					<?php
					echo '<tr class="meses d-flex-column">
						<th><button >MES</button></th>';	
					while($registro2=mysql_fetch_array($consulta2)) {
						echo "<th>".$registro2['mes']."</th>";		
				            
					};
					echo "</tr>";
					?>

				
		
		<?php
		$consulta3=@mysql_query("SELECT * FROM precio_meses WHERE estado = 1 and id_habitacion ='".$_REQUEST['empid']."'",$conecta);
		mysql_close($conecta3);
		echo '<tr class="d-flex-column">
			<td>
                <div>
                    <p class="dias">Lunes a <br> Jueves</p>                    
                </div>
            </td>';
		while($registro3=mysql_fetch_array($consulta3)) {
			echo "<td>
					<a  data-target='#popup_".$registro3['id_habitacion'].$registro3['precio_lun_juev'].$registro3['mes']."' data-toggle='modal'  >
					<div >
                    	<p>$ ".$registro3['precio_lun_juev']."</p>
                    </div>
                    </a>                    
                  </td>
                  ";		
            
	            
		};
		
		?>
		
		<?php
		echo '</tr>
		<tr class="d-flex-column">
			<td>
                <div>
                    <p class="dias">Viernes a <br> Domingo</p>                    
                </div>
            </td>';
		$consulta4=@mysql_query("SELECT * FROM precio_meses WHERE estado = 1 and id_habitacion ='".$_REQUEST['empid']."'",$conecta);
		mysql_close($conecta4);
	
		while($registro4=mysql_fetch_array($consulta4)) {
			echo "<td>
					<a  data-target='#popup_".$registro4['id_habitacion'].$registro4['precio_vier_doming'].$registro4['mes']."' data-toggle='modal'  >
					<div>
                    	<p>$ ".$registro4['precio_vier_doming']."</p>
                    </div>
                    </a>
                  </td>";		
	            
		}
		echo "</tr>";
		?>
	



	
	<?php 
	
	


} 
elseif ($_REQUEST['modal']) {

	$consulta5=@mysql_query("SELECT * FROM precio_meses WHERE estado = 1 and id_habitacion ='".$_REQUEST['modal']."'",$conecta);
		
	
		while($registro5=mysql_fetch_array($consulta5)) {
			echo "<div aria-hidden='true' aria-labelledby='myModalLabel' role='dialog' tabindex='-1' id='popup_".$registro5['id_habitacion'].$registro5['precio_lun_juev'].$registro5['mes']."' class='modal fade '>
                    <div class='modal-dialog'>
				     <div  class='modal-content'>
				         <div class='modal-header'>
				             <p class='mes-elegido'>".$registro5['mes']."</p> 
				             <p class='fecha-elegida'>Lunes a Jueves </p> 
				         </div>   
				         <div class='modal-body'>   
				         <form  action='./accion.php' method='post' >
				         <input type='hidden'  name='reserva' placeholder='reserva' value='Lunes a Jueves ".$registro5['precio_lun_juev']." - ".$registro5['mes']."'>
				         <input type='text' name='celular' placeholder='Celular' value=''>
				         <input type='text' name='nombre' placeholder='Nombre' value=''>
				         <button  type='submit' >Enviar</button>
				         </form>
				         </div>
				     </div>
					</div>
					</div>

					<div aria-hidden='true' aria-labelledby='myModalLabel' role='dialog' tabindex='-1' id='popup_".$registro5['id_habitacion'].$registro5['precio_vier_doming'].$registro5['mes']."' class='modal fade '>
                    <div class='modal-dialog'>
				     <div  class='modal-content'>
				         <div class='modal-header'>
				             <p class='mes-elegido'>".$registro5['mes']."</p> 
				             <p class='fecha-elegida'>Viernes a Domingo </p> 
				         </div>   
				         <div class='modal-body'>   
				         <form  action='./accion.php' method='post' >
				         <input type='hidden'  name='reserva' placeholder='reserva' value='Viernes a Domingo ".$registro5['precio_vier_doming']." - ".$registro5['mes']."'>
				         <input type='text' name='celular' placeholder='Celular' value=''>
				         <input type='text' name='nombre' placeholder='Nombre' value=''>
				         <input type='submit' >Enviar</input>
				         </form>
				         </div>
				     </div>
					</div>
					</div>";		
	            
		}
}
?>