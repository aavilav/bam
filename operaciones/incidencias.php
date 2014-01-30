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
    </head>
    <body>
        <?php 
        error_reporting(E_ALL ^ E_NOTICE);
        $ser_codigo=$_GET['ser_codigo'];?>
        <form method="post" action="add_incidencias.php">
            <table align="center">
                <?php if($ser_codigo==''){?>
                <tr><td>Codigo Servicio:</td><td><input type="text" name="ser_codigo" required></td></tr>
                <?php } else{?>
                <tr><td>Codigo Servicio:</td><td><input type="text" name="ser_codigo" value="<?php echo $ser_codigo?>" required></td></tr>
                 <?php } ?>
                <tr><td>Asunto:</td><td><input type="text" name="inc_asunto" required></td> </tr>
                <tr><td>Descripcion:</td><td><textarea name="inc_descripcion"></textarea></td></tr>
               <tr><td><input type="submit" value="Guardar" class="btn btn-primary"></td></tr>
            </table>
        </form>
    </body>
</html>


