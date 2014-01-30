
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
    <title>Cronograma</title>
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

	<style type="text/css" media="screen">
		#jMonthCalendar .Visita { background-color: #80FF80; }
		#jMonthCalendar .Urgente { background-color: #FF8080; }
		#jMonthCalendar .Normal { background-color: #FFFF80; }
	</style>
	
	
    <script type="text/javascript">
        $().ready(function() {
			var options = {
				height: 500,
				width: 1050,
				navHeight: 25,
				labelHeight: 15,
				onMonthChanging: function(dateIn) {
					//this could be an Ajax call to the backend to get this months events
					//var events = [ 	{ "EventID": 7, "StartDate": new Date(2009, 1, 1), "Title": "10:00 pm - EventTitle1", "URL": "#", "Description": "This is a sample event description", "CssClass": "Birthday" },
					//				{ "EventID": 8, "StartDate": new Date(2009, 1, 2), "Title": "9:30 pm - this is a much longer title", "URL": "#", "Description": "This is a sample event description", "CssClass": "Meeting" }
					//];
					//$.jMonthCalendar.ReplaceEventCollection(events);
					return true;
				},
				onEventLinkClick: function(event) { 
					alert("event link click");
					return true; 
				},
				onEventBlockClick: function(event) { 
					alert("block clicked");
					return true; 
				},
				onEventBlockOver: function(event) {
					//alert(event.Title + " - " + event.Description);
					return true;
				},
				onEventBlockOut: function(event) {
					return true;
				},
				onDayLinkClick: function(date) { 
					alert(date.toLocaleDateString());
					return true; 
				},
				onDayCellClick: function(date) { 
					alert(date.toLocaleDateString());
					return true; 
				}
			};
			<?php 
      require 'CapaNegocio/clsNegocio.php';
// Recuperar datos del Cliente
$ObjP = new clsNegocio();
$p=$ObjP->ListarCalendario();

?>
                                                                   
			
			var events = [ <?php foreach($p as $fila){ ?>	{ 
                                "EventID": <?php echo '"'.$fila['cal_codigo'].'"'?>, 
                                "StartDateTime": <?php echo '"'.$fila['cal_fecha'].'"' ?>, 
                                "Title": <?php echo '"'.$fila['cal_titulo'].'"' ?>, 
                                "URL": <?php echo '"detallecalendario.php?cal_codigo='.$fila['cal_codigo'].'"' ?>, 
                                "CssClass": <?php echo '"'.$fila['cal_tipo'].'"' ?> },
			<?php } ?> ]; 
			var newoptions = { };
			var newevents = [ ];
			//$.jMonthCalendar.Initialize(newoptions, newevents);

			
			$.jMonthCalendar.Initialize(options, events);
			
			
			
			
			var extraEvents = [	{ "EventID": 5, "StartDateTime": "2013-08-11", "Title": "10:00 pm - EventTitle1", "URL": "#", "Description": "This is a sample event description", "CssClass": "Birthday" },
								{ "EventID": 6, "StartDateTime": new Date(2009, 3, 20), "Title": "9:30 pm - this is a much longer title", "URL": "#", "Description": "This is a sample event description", "CssClass": "Meeting" }
			];
			
			$("#Button").click(function() {					
				$.jMonthCalendar.AddEvents(extraEvents);
			});
			
			$("#ChangeMonth").click(function() {
				$.jMonthCalendar.ChangeMonth(new Date(2008, 4, 7));
			});
        });
    </script>
</head>
<body>
      <?php 
      error_reporting(E_ALL ^ E_NOTICE);
      session_start(); 
     if($_SESSION['msj']=='servicio'){?>
      <div class="alert alert-success">
  <center><strong>OK!</strong> Informacion registrada correctamente.</center>
</div>  
<?php  }
session_destroy();
?>
<div class="container-fluid">
    <div id="jMonthCalendar"></div>
    </div>	
</body>
</html>
