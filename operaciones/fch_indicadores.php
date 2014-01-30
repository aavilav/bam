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
    </head>
    <body>
        <form method="post" action="RpIndicadores.php">
            <table align="center">
                <tr><th>REPORTE DE INDICADORES</th></tr>
                <tr><td>Fecha:</td><td><input type="text" name="fecha" id="datepicker"></td></tr>
               <tr><td><input type="submit" value="Buscar" class="btn btn-primary"></td></tr>
            </table>
        </form>
    </body>
</html>
