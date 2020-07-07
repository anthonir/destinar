<?php session_start();

include('../conexion.php');

$consulta=@mysql_query('SELECT * FROM tipo_habitacion where estado = 1',$conecta);
//$resultado=mysql_fetch_array($consulta);

mysql_close($conecta);

?>
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fonts/fonts.css">
    <!-- Latest minified bootstrap css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

<!-- Latest minified bootstrap js -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    
    <title>Tabla precios</title>
</head>
<body>
    
<!--div class="menu d-flex">
    <h1>Solventa</h1>
    <img src="img/menu-icon.svg" alt="">
</div-->

<div class="table-container">
    <table class="promociones-table">
    
          <div class="theader">
              <h2>Promociones <span class="down-arrow"><select name="id_habitacion" id="id_habitacion">
                <?php 
                while($registro=mysql_fetch_array($consulta))
                    {
                        echo '<option value="'.$registro['id'].'">'.$registro['name'].'</option>';
                        
                    }
                ?>
                </select><img src="img/down-arrow.svg" alt=""></span></h2>
                
          </div>
    
          <div class="tmain d-flex" >
            <tbody class="d-flex" id="tabla">
                
            <tbody>
          </div>

    </table>  

</div>
    
<!--div class="footer-table d-flex">
        <button>
            <img src="img/ws-green.png" alt="whatsapp icon">
            <span>whatsapp</span>
        </button>
        <button>
             <img src="img/phone-icon.png" alt="Celular icon">
             <span>Celular</span>
         </button>           
</div-->  
  <div id="idmodal">
      
  </div> 


</body>
</html>
<script type="text/javascript">
    $(document).ready(function(){  
    // Código para obtener todos los registros de la tabla a través del cuadro de selección
    $("#id_habitacion").change(function() {    
        var id = $(this).find(":selected").val();
        var dataString = 'empid='+ id;    
        $.ajax({
            url: 'datos_mes.php',            
            data: dataString,  
            cache: false,
            success: function(employeeData) {
              $('#tabla').html(employeeData);
            } 
        });
        var id = $(this).find(":selected").val();
        var dataString = 'modal='+ id;    
        $.ajax({
            url: 'datos_mes.php',            
            data: dataString,  
            cache: false,
            success: function(employeeData) {
              $('#idmodal').html(employeeData);
            } 
        });
    });
    var id = $(this).find(":selected").val();
        var dataString = 'empid='+ id;    
        $.ajax({
            url: 'datos_mes.php',            
            data: dataString,  
            cache: false,
            success: function(employeeData) {
              $('#tabla').html(employeeData);
            } 
        });
     var id = $(this).find(":selected").val();
        var dataString = 'modal='+ id;    
        $.ajax({
            url: 'datos_mes.php',            
            data: dataString,  
            cache: false,
            success: function(employeeData) {
              $('#idmodal').html(employeeData);
            } 
        });
});


</script>