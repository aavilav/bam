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
    $cal_codigo=$_GET['cal_codigo'];
    $C=new clsNegocio();
    $b=$C->BuscarCalendario2($cal_codigo);
    $S= new clsNegocio();
    $x=$S->BuscarServicio($cal_codigo);
    
    foreach($b as $fila){ 
  ?>
      <div>
      <center><h3>Datos de la Visita</h3></center>
            <table align="center" class="table table-hover">
                <tr><th bgcolor="silver">Cliente:</th><td><?php echo $fila['cli_razon']?></td></tr>
                 <tr><th bgcolor="silver">RUC:</th><td><?php echo $fila['cli_ruc']?></td></tr>
                <tr><th bgcolor="silver">Titulo:</th><td><?php echo $fila['cal_titulo']?></td> </tr>
                <tr><th bgcolor="silver">Fecha:</th><td><?php echo $fila['cal_fecha']?></td></tr>
                <tr><th bgcolor="silver">Hora:</th><td><?php echo $fila['cal_hora']?></td></tr>
                <tr><th bgcolor="silver">Descripcion:</th><td><?php echo $fila['cal_descrip']?></td></tr>
               <tr><th bgcolor="silver">Tipo:</th><td><?php echo $fila['cal_tipo']?></td></tr>
               <tr><th bgcolor="silver">Empleado:</th><td><?php echo $fila['emp_apellido']?></td></tr>
            </table>
       <?php }?>
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
  <center><h4>Detalle del Servicio</h4></center>
      <table align="center" class="table table-hover">
          <tr><th bgcolor="silver">Codigo</th><th bgcolor="silver">Equipo</th><th bgcolor="silver">Defecto</th><th bgcolor="silver">Marca</th><th bgcolor="silver">Modelo</th><th bgcolor="silver">Serie</th><th bgcolor="silver">Observaciones</th><th bgcolor="silver">Encuesta</th></tr>
          <?php foreach($x as $filas){  ?>
            <tr class="warning">
            <td><a  href="servicio.php?ser_codigo=<?php echo $filas['ser_codigo'] ?>" class="btn btn-warning"><?php echo $filas['ser_codigo'] ?></a></td>
            <td><?php echo $filas['ser_equipo'] ?></td>
            <td><?php echo $filas['ser_defecto'] ?></td>
            <td><?php echo $filas['ser_marca'] ?></td>
            <td><?php echo $filas['ser_modelo'] ?></td>
            <td><?php echo $filas['ser_serie'] ?></td>
           <td><?php echo $filas['ser_obs'] ?></td>
           <td><?php $ser_codigo=$filas['ser_codigo'];
           $E= new clsNegocio(); 
           $q=$E->BuscarEncuesta($ser_codigo);
           $count2= count($q);
               if($count2==0){?>
               <a  href="encuesta1.php?ser_codigo=<?php echo $ser_codigo ?>" class="btn btn-primary btn-lg">pre-test</a>
                <?php  }else if ($count2==1) {?>
             <a  href="encuesta2.php?ser_codigo=<?php echo $ser_codigo ?>">post-test</a>
                <?php  }else{?>
             <a  href="incidencias.php?ser_codigo=<?php echo $ser_codigo ?>">Incidencias</a>
            <a  href="reclamos.php?ser_codigo=<?php echo $ser_codigo ?>">Reclamo</a>
                <?php } ?>
             </td></tr>
             <?php } } ?>
      </table>
  <div>
  <form action="creardetalle.php">
<table align="center" >
<tr>
    <td><input type="hidden" name="cal_codigo" value="<?php echo $fila['cal_codigo']?>"></td>
    <td><input type="submit" value="Agregar Servicio" class="btn btn-default"></td>
</tr>
</table>
</form>
  </div>
      </div>
</body>
</html>