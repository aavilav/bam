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
        <script src="js/modal.js"></script>
    </head>
  <body>
        <?php
    require 'CapaNegocio/clsNegocio.php';
    $ser_codigo=$_GET['ser_codigo'];
    $C=new clsNegocio();
    $b=$C->ConsultarServicio($ser_codigo);
    foreach($b as $fila){ 
  ?>
        <form method="post" action="edit_servicio.php">
            <table align="center">
                <tr><td><input type="hidden" name="ser_codigo" value="<?php echo $fila['ser_codigo']?>"></td></tr>
                <tr><td>Equipo:</td><td><input type="text" name="ser_equipo" value="<?php echo $fila['ser_equipo']?>" required></td> </tr>
                <tr><td>Defecto:</td><td><input type="text" name="ser_defecto" value="<?php echo $fila['ser_defecto']?>" required></td></tr>
                <tr><td>Marca:</td><td><input type="text" name="ser_marca" value="<?php echo $fila['ser_marca']?>" required></td></tr>
                <tr><td>Modelo:</td><td><input type="text" name="ser_modelo" value="<?php echo $fila['ser_modelo']?>" required></td></tr>
               <tr><td>Serie:</td><td><input type="text" name="ser_serie" value="<?php echo $fila['ser_serie']?>" required></td></tr>
               <tr><td>Observaciones:</td><td><textarea name="ser_obs"><?php echo $fila['ser_obs']?></textarea></td></tr>
               <tr><td><input type="submit" value="Actualizar" class="btn btn-primary"></td></tr>
               <tr><td><a data-toggle="modal" href="#pre"  class="btn btn-danger">No conformidad</a></td></tr>
            </table>
        </form>
      
       <?php $ser_con=$fila['ser_con'];
       $ser_codigo=$fila['ser_codigo'];      
       }?>
      <div class="modal fade" id="pre" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">No Conformidad del Pedido N° <?php echo $ser_codigo ?></h4>
        </div>
        <form  action="conformidad.php">
          <table class="table"><tr><td>
          <div class="modal-body">    
            <table align="center">
                <tr><td><input type="hidden" name="ser_codigo" value="<?php echo $ser_codigo ?>"></td></tr>
                <tr><td>Descripcion:</td><td><textarea name="ser_con"><?php echo $ser_con ?></textarea></td></tr>
            </table>  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <input type="submit" class="btn btn-primary" value="Guardar">
        </div>
</td></tr></table>
</form>
      </div>
    </div>
  </div>
    </body>
</html>