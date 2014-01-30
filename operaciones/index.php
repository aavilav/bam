
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <title>Control de Calidad</title>

    <link rel="stylesheet" href="../css/core.css" type="text/css" />
<link href="../css/estilos.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" media="screen" href="../css/screen.css" />
<link href="../css/bootstrap.min.css" rel="stylesheet" media="screen"></link>
<link href="../css/bootstrap.css" rel="stylesheet" media="screen"></link>
<link href="../css/bootstrap-responsive.css" rel="stylesheet" media="screen"></link>
    <link href="../css/bootstrap-responsive.min.css" rel="stylesheet" media="screen"></link>		
    <script src="../js/jquery-1.3.min.js" type="text/javascript"></script>
    <script src="../js/jMonthCalendar.js" type="text/javascript"></script>
    <script src="../js/bootstrap-transition.js"></script>
    <script src="../js/bootstrap-alert.js"></script>
    <script src="../js/bootstrap-modal.js"></script>
    <script src="../js/bootstrap-dropdown.js"></script>
    <script src="../js/bootstrap-scrollspy.js"></script>
    <script src="../js/bootstrap-tab.js"></script>
    <script src="../js/bootstrap-tooltip.js"></script>
    <script src="../js/bootstrap-popover.js"></script>
    <script src="../js/bootstrap-button.js"></script>
    <script src="../js/bootstrap-collapse.js"></script>
    <script src="../js/bootstrap-carousel.js"></script>
    <script src="../js/bootstrap-typeahead.js"></script>	
</head>
<body>
    <?php //include 'control.php';?>
<div id="header"><font face="Arial" size="+2" color="black">
        <center>
            <h1>
                <marquee bgcolor="#FFFFFF" width="100%" scrolldelay="100" scrollamount="5" direction="left" loop="infinite">
<!--           EMPRESA         -->  CONSORCIO IMPORT SERVICE GROUP
                </marquee>
            </h1>
        </center>
    </font>
</div>
<div class="navbar navbar-inverse">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="index.php">Control de Calidad</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="cronograma.php" target="menu">Cronograma</a></li>
              <li><a href="empleado.php" target="menu">Empleados</a></li>
              <li><a href="#contact" target="menu">Reportes</a></li>
            </ul>
              <p class="navbar-text pull-right"><a href="cerrar.php" class="navbar-link">Cerrar Sesion</a></p>
<!--            <form class="navbar-form pull-right">
              <input class="span2" type="text" placeholder="Email">
              <input class="span2" type="password" placeholder="Password">
              <button type="submit" class="btn">Sign in</button>
            </form>-->
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
<div class="container-fluid">
    <div class="row-fluid">
<div class="span2">
<div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Clientes</li>
              <li><a href="nuevocliente.php" target="menu">Nuevo Cliente</a></li>
              <li><a href="editarcliente.php" target="menu">Editar Cliente</a></li>
              <li class="divider"></li>
              <li class="nav-header">Visitas</li>
              <li><a href="nuevoservicio.php" target="menu">Nueva Visita</a></li>
              <li><a href="editarservicio.php" target="menu">Editar Visita</a></li>
              <li class="divider"></li>
              <li class="nav-header">Empleados</li>
              <li><a href="nuevoempleado.php" target="menu">Nuevo Empleado</a></li>
              <li><a href="empleado.php" target="menu">Editar Empleado</a></li>
              <li class="divider"></li>
              <li class="nav-header">Historial</li>
              <li><a href="Listar_reclamo.php" target="menu">Reclamos</a></li>
              <li><a href="Listar_incidencia.php" target="menu">Incidencias</a></li>
              <li class="divider"></li>
              <li class="nav-header">Reportes</li>
              <li><a href="fch_reclamos.php" target="menu">Reporte de Reclamos</a></li>
              <li><a href="fch_indicadores.php" target="menu">Reporte de Indicadores</a></li>
              <li><a href="fch_empleados.php" target="menu">Reporte de Empleados</a></li>
              <li><a href="fch_satisfaccion.php" target="menu">Reporte de Clientes</a></li>
            </ul>
          </div>
          </div>
<div class="span9"><iframe name="menu" src='cronograma.php' width="113%" height="800"
                 frameborder="0">[su navegador no soporta marcos]</iframe></div>
    </div>
    </div>	
</body>
</html>