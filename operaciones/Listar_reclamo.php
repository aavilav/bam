<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
         <link rel="stylesheet" href="../js/jquery-ui.css" />
        <script src="../js/jquery-1.9.1.js"></script>
        <script src="../js/jquery-ui.js"></script>
        <script src="../js/modal.js"></script>
        <link href="../css/estilos.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" media="screen" href="../css/screen.css" />
        <link rel="stylesheet" href="/resources/demos/style.css" />
        <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="../css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="../css/bootstrap-responsive.css" rel="stylesheet" media="screen">
        <link href="../css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">

    </head>
  <body>
        <?php
    require 'CapaNegocio/clsNegocio.php';
    $S= new clsNegocio();
    $x=$S->ListarReclamo();
  ?>
      <div>
      <center><h3>Lista de Reclamos</h3></center>
           
      <?php $count=  count($x);
          if($count==0){ ?>
<!--<form action="creardetalle.php">
<table align="center" >
<tr>
    <td><input type="hidden" name="cal_codigo" value="<?php //echo $fila['cal_codigo']?>"></td>
    <td><input type="submit" value="Agregar Detalle" class="btn btn-default"></td>
</tr>
</table>
</form>-->
        <?php }else{  ?>
      <table align="center" class="table table-hover">
          <tr><th bgcolor="silver">Codigo</th><th bgcolor="silver">Motivo</th><th bgcolor="silver">Detalle</th><th bgcolor="silver">Fecha</th></tr>
          <?php foreach($x as $filas){  ?>
            <tr class="warning">
            <td><a  href="reclamos.php?ser_codigo=<?php echo $filas['ser_codigo'] ?>" class="btn btn-warning"><?php echo $filas['ser_codigo'] ?></a></td>
            <td><?php echo $filas['rec_motivo'] ?></td>
            <td><?php echo $filas['rec_detalle'] ?></td>
            <td><?php echo $filas['rec_fecha'] ?></td>
          </tr>
             <?php } } ?>
      </table>
      </div>
</body>
</html>