<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <link rel="stylesheet" href="../js/jquery-ui.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <link href="../css/estilos.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" media="screen" href="../css/screen.css" />
        <link rel="stylesheet" href="/resources/demos/style.css" />
        <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="../css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="../css/bootstrap-responsive.css" rel="stylesheet" media="screen">
        <link href="../css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <script>
 <?php 
require 'CapaNegocio/clsNegocio.php';
// Recuperar datos del Cliente
$ObjP = new clsNegocio();
$p=$ObjP->ListarCliente();
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
  </script>
    </head>
    <body>
        <form action="ver_servicio.php">
            <table align="center">
                <tr><td>Razon social:</td><td><input type="text" name="cli_razon" required placeholder="Buscar por razon social" id="tags"></td> </tr>
               <tr align="center"><td><input type="submit" value="Buscar" class="btn btn-primary"></td></tr>
            </table>
        </form>
    </body>
</html>