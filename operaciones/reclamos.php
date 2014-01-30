<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <link rel="stylesheet" href="css/jquery-ui.css" />
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
    </head>
    <body>
         <?php
         error_reporting(E_ALL ^ E_NOTICE);
        $ser_codigo=$_GET['ser_codigo'];?>
        <form method="post" action="add_reclamos.php">
            <table align="center">
                <?php if($ser_codigo==''){?>
                <tr><td>Codigo Servicio:</td><td><input type="text" name="ser_codigo" required></td></tr>
                <?php } else{?>
                <tr><td>Codigo Servicio:</td><td><input type="text" name="ser_codigo" value="<?php echo $ser_codigo?>" required></td></tr>
                 <?php } ?>
                <tr><td>Motivo:</td><td><input type="text" name="rec_motivo" required></td> </tr>
                <tr><td>Fecha:</td><td><input type="text" name="rec_fecha" id="datepicker" required></td></tr>
                <tr><td>Detalle:</td><td><textarea name="rec_detalle"></textarea></td></tr>
               <tr><td><input type="submit" value="Guardar" class="btn btn-primary"></td></tr>
            </table>
        </form>
    </body>
</html>


