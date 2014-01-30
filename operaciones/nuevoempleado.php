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
        <form method="post" action="add_empleado.php">
            <table align="center">
                <tr><td>Nombre:</td><td><input type="text" name="emp_nombre" required></td> </tr>
                <tr><td>Apellidos:</td><td><input type="text" name="emp_apellido" required></td></tr>
                <tr><td>DNI:</td><td><input type="text" name="emp_dni" required></td></tr>
                <tr><td>Direccion:</td><td><input type="text" name="emp_direccion" required></td></tr>
                <tr><td>Distrito:</td><td><input type="text" name="emp_distrito" required></td></tr>
               <tr><td>Telefono:</td><td><input type="text" name="emp_telefono" required></td></tr>
               <tr><td>Celular:</td><td><input type="text" name="emp_celular" required></td></tr>
               <tr><td>Puesto:</td><td><input type="text" name="emp_puesto" required></td></tr>
               <tr><td><input type="submit" value="Guardar" class="btn btn-primary"></td></tr>
            </table>
        </form>
        <?php 
      error_reporting(E_ALL ^ E_NOTICE);
      session_start(); 
     if($_SESSION['msj']=='empleado'){?>
      <div class="alert alert-success">
  <center><strong>OK!</strong> Empleado registrado correctamente.</center>
</div>  
<?php session_destroy(); }?>
    </body>
</html>

