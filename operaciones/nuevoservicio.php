<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <link href="css/jquery-ui.css" rel="stylesheet" media="screen" />
        <script src="js/jquery-1.9.1.js"></script>
        <script src="js/jquery-ui.js"></script>
        <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" media="screen" href="css/screen.css" />
        <link rel="stylesheet" href="/resources/demos/style.css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen">
        <link href="css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <script>
            $(function(){
    $("#datepicker").datepicker();
    $('#datepicker').datepicker('option', {dateFormat: 'yy-mm-dd'});
});
        </script>
        <script>
 <?php 
 $fecha=$_GET['cal_fecha'];
      require 'CapaNegocio/clsNegocio.php';
// Recuperar datos del Cliente
$ObjP = new clsNegocio();
$p=$ObjP->ListarCliente();
$ObjE = new clsNegocio();
$e=$ObjE->ListarEmpleado();
?>
 $(function() {
    var availableTags = [
        <?php 
            $temp=count($p);
        $cont=0;
        foreach($p as $fila){ 
        $cont++;
            if($temp!=$cont){
          echo '"'.$fila['cli_razon'].'",';   
        }else{
            echo '"'.$fila['cli_razon'].'"'; 
        }
        }?> ];
    $( "#tags" ).autocomplete({
       
      source: availableTags
    });
  });
  $(function() {
    var availableTags = [
        <?php 
            $temp2=count($e);
        $cont2=0;
        foreach($e as $fila){ 
        $cont2++;
            if($temp2!=$cont){
          echo '"'.$fila['emp_apellido'].'",';   
        }else{
            echo '"'.$fila['emp_apellido'].'"'; 
        }
        }?> ];
    $( "#tags2" ).autocomplete({
       
      source: availableTags
    });
  });
  </script>
    </head>
    <body>
        <form method="post" action="add_servicio.php">
            <table align="center">
                <tr><td>Asunto:</td><td><input type="text" name="cal_titulo" required></td> </tr>
                <tr><td>Fecha:</td><td><input type="text" name="cal_fecha" value="<?php echo $fecha ?>"></td></tr>
                <tr><td>Hora:</td><td>
                        <select class="span1" name="h">
                            <?php  for ($i=1; $i<25; $i++){
                             if ($i<10){?>
                            <option value="<?php echo '0'.$i ?>"><?php echo '0'.$i ?>
                            </option>
                            <?php }else{?>
                            <option value="<?php echo $i ?>"><?php echo $i ?>
                            </option>
                            <?php }}?>
                        </select>
                        <strong>:</strong>
                        <select class="span1" name="m">
                            <?php  for ($i=0; $i<60; $i++){
                                if ($i<10){?>
                            <option value="<?php echo '0'.$i ?>"><?php echo '0'.$i ?>
                            </option>
                            <?php }else{?>
                            <option value="<?php echo $i ?>"><?php echo $i ?>
                            </option>
                            <?php }}?>
                        </select>
                     <strong>:</strong>
                        <select class="span1" name="s">
                            <?php  for ($i=0; $i<60; $i++){
                                if ($i<10){?>
                            <option value="<?php echo '0'.$i ?>"><?php echo '0'.$i ?>
                            </option>
                            <?php }else{?>
                            <option value="<?php echo $i ?>"><?php echo $i ?>
                            </option>
                            <?php }}?>
                        </select>
                    </td>
                </tr>
                <tr><td>Descripcion:</td><td><input type="text" name="cal_descrip" required></td></tr>
               <tr><td>Empresa</td><td><input type="text" name="cli_razon" required id="tags"></td></tr>
               <tr><td>Tipo:</td><td><select class="span2" name="cal_tipo">
                            <option value="Visita">Visita</option>
                            <option value="Normal">Normal</option>
                            <option value="Urgente">Urgente</option>
                       </select></td></tr>
               <tr><td>Empleado</td><td><input type="text" name="emp_nombre" required id="tags2"></td></tr>
               <tr><td><input type="submit" value="Guardar" class="btn btn-primary"></td></tr>
            </table>
        </form>

        <?php 
        
//         error_reporting(E_ALL ^ E_NOTICE);
//session_start();
//if($_SESSION['fecha']!=''){
//    echo 'Fecha y hora no disponible ';
//}
//if($_SESSION['emp']!=''){
//    echo 'Empleado no disponible ';
//    
//    }
//session_destroy();
        ?>
    </body>
</html>
