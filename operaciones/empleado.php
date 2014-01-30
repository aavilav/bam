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
        <form method="post" action="ver_empleado.php">
            <table align="center">
                <tr><td>Apellido:</td><td><input type="text" name="emp_apellido" required placeholder="Buscar por apellido"></td> </tr>
               <tr align="center"><td><input type="submit" value="Buscar" class="btn btn-primary"></td><td><a href="nuevoempleado.php" class="btn btn-info btn-lg">Registrar</a></td></tr>
            </table>
        </form>
    </body>
</html>


