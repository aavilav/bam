<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <link rel="stylesheet" href="../js/jquery-ui.css" />
        <script src="../js/jquery-1.9.1.js"></script>
        <script src="../js/jquery-ui.js"></script>
        <link href="../css/estilos.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" media="screen" href="../css/screen.css" />
        <link rel="stylesheet" href="/resources/demos/style.css" />
        <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="../css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="../css/bootstrap-responsive.css" rel="stylesheet" media="screen">
        <link href="../css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">

    </head>
  <body>
        <?php
    require 'CapaNegocio/clsNegocio.php';
    $cal_codigo=$_GET['cal_codigo'];
    $C=new clsNegocio();
    $b=$C->BuscarCalendario2($cal_codigo);
    foreach($b as $fila){ 
  ?>
        <form method="post" action="edit_calendario.php">
            <table align="center">
                <tr><td><input type="hidden" name="cal_codigo" value="<?php echo $fila['cal_codigo']?>"></td></tr>
                <tr><td>Titulo:</td><td><input type="text" name="cal_titulo" value="<?php echo $fila['cal_titulo']?>" required></td> </tr>
                <tr><td>Fecha:</td><td><input type="text" name="cal_fecha" value="<?php echo $fila['cal_fecha']?>" required></td></tr>
                <tr><td>Hora:</td><td><input type="text" name="cal_hora" value="<?php echo $fila['cal_hora']?>" required></td></tr>
                <tr><td>Descripcion:</td><td><input type="text" name="cal_descrip" value="<?php echo $fila['cal_descrip']?>" required></td></tr>
               <tr><td>Tipo:</td><td><input type="text" name="cal_tipo" value="<?php echo $fila['cal_tipo']?>" required></td></tr>
               <tr><td>Empleado:</td><td><input type="text" name="emp_apellido" value="<?php echo $fila['emp_apellido']?>" required></td></tr>
               <tr><td><input type="submit" value="Actualizar" class="btn btn-primary"></td></tr>
            </table>
        </form>
       <?php }?>
    </body>
</html>