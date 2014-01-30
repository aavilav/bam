<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <link href="css/estilos.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" media="screen" href="css/screen.css" />
        <link rel="stylesheet" href="/resources/demos/style.css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen">
        <link href="css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
 <?php 
 error_reporting(E_ALL ^ E_NOTICE);
require 'CapaNegocio/clsNegocio.php';
$ObjP = new clsNegocio();
// Recuperar datos del Cliente
$cli_razon=$_GET['cli_razon'];
$c=$ObjP->BuscarCliente($cli_razon);
$cli_codigo=$c[0]['cli_codigo'];

$p=$ObjP->BuscarCalendario($cli_codigo);
echo $count=  count($p);
?>
    </head>
    <body>
        <table class="table table-hover" align="center">
            <tr><th>Codigo</th><th>Asunto</th><th>Fecha</th><th>Hora</th><th>Descripcion</th><th>Tipo</th>
                <th>Acciones</th>
            </tr>
           <?php foreach ($p as $fila) { ?>
            <tr>
                <td><?php  echo $fila['cal_codigo']; ?></td>
                <td><?php echo $fila['cal_titulo']; ?></td>
                <td><?php echo $fila['cal_fecha']; ?></td>
                <td><?php  echo $fila['cal_hora']; ?></td>
                <td><?php  echo $fila['cal_descrip']; ?></td>
                <td><?php echo $fila['cal_tipo']; ?></td>
                <td><a href='actualizarservicio.php?cal_codigo=<?php  echo $fila['cal_codigo'] ?>'><img src='images/editar.png'/></a></td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>
