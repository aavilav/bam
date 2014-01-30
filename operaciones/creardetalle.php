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
        <?php $cal_codigo=$_GET['cal_codigo'];?>
        <form  action="add_detalle.php">
            <table align="center">
                <tr><td>Equipo:</td><td><input type="text" name="ser_equipo" required></td> </tr>
                <tr><td>Defecto:</td><td><input type="text" name="ser_defecto" required></td></tr>
                <tr><td>Marca:</td><td><input type="text" name="ser_marca" required></td></tr>
                <tr><td>Modelo:</td><td><input type="text" name="ser_modelo"></td></tr>
               <tr><td>Serie:</td><td><input type="text" name="ser_serie"></td></tr>
               <tr><td>Observaciones</td><td><textarea name="ser_obs"></textarea></td></tr>
               <tr><td><input type="hidden" name="cal_codigo" value="<?php echo $cal_codigo ?>"></td></tr>
               <tr><td><input type="submit" value="Registrar" class="btn btn-primary"></td></tr>
            </table>
        </form>
    </body>
</html>


