<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script src="js/modal.js"></script>
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
    require 'CapaNegocio/clsNegocio.php';
    $emp_apellido=$_POST['emp_apellido'];
    $S= new clsNegocio();
    $x=$S->BuscarEmpleado($emp_apellido);
  ?>
        <table align="center" class="table table-hover">
          <tr><th bgcolor="silver">Nombre</th><th bgcolor="silver">Apellidos</th><th bgcolor="silver">DNI</th><th bgcolor="silver">Direccion</th><th bgcolor="silver">Telefono</th><th bgcolor="silver">Puesto</th><th bgcolor="silver">Acciones</th></tr>
          <?php foreach($x as $filas){  ?>
            <tr class="warning">
            <td><?php echo $filas['emp_nombre'] ?></td>
            <td><?php echo $filas['emp_apellido'] ?></td>
            <td><?php echo $filas['emp_dni'] ?></td>
            <td><?php echo $filas['emp_direccion'] ?></td>
           <td><?php echo $filas['emp_telefono'] ?></td>
           <td><?php echo $filas['emp_puesto'];?></td>
           <td><?php $emp_codigo=$filas['emp_codigo'];?>
               <a data-toggle="modal" href="#pre" class="btn btn-primary btn-lg">Editar</a></td>
            </tr> <?php } ?>
      </table>
        <?php
    $codigo=$emp_codigo;
    $C=new clsNegocio();
    $b=$C->ConsultaEmpleado($codigo); 
  ?>
    <div class="modal fade" id="pre" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Empleado</h4>
        </div>
        <form  action="edit_empleado.php">
          <table class="table"><tr><td>
          <div class="modal-body">
              <?php foreach($b as $fila){  ?>
            <table align="center">
                <tr><td><input type="hidden" name="emp_codigo" value="<?php echo $fila['emp_codigo']?>"></td></tr>
                <tr><td>Nombre:</td><td><input type="text" name="emp_nombre" value="<?php echo $fila['emp_nombre']?>" required></td> </tr>
                <tr><td>Apellido:</td><td><input type="text" name="emp_apellido" value="<?php echo $fila['emp_apellido']?>" required></td></tr>
                <tr><td>DNI:</td><td><input type="text" name="emp_dni" value="<?php echo $fila['emp_dni']?>" required></td></tr>
                <tr><td>Direccion:</td><td><input type="text" name="emp_direccion" value="<?php echo $fila['emp_direccion']?>" required></td></tr>
               <tr><td>Distrito:</td><td><input type="text" name="emp_distrito" value="<?php echo $fila['emp_distrito']?>" required></td></tr>
               <tr><td>Telefono:</td><td><input type="text" name="emp_telefono" value="<?php echo $fila['emp_telefono']?>" required></td></tr>
               <tr><td>Celular:</td><td><input type="text" name="emp_celular" value="<?php echo $fila['emp_celular']?>" required></td></tr>
               <tr><td>Puesto:</td><td><input type="text" name="emp_puesto" value="<?php echo $fila['emp_puesto']?>" required></td></tr>
            </table>
              <?php }?>
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
