<?php
$fch=$_POST['fecha'];
require 'CapaNegocio/clsNegocio.php';
include("../pChart/pData.class");
include("../pChart/pChart.class");
$K=new clsNegocio();
$filas=$K->RpEmpleados2($fch);
if(count($filas)!=0){
$DataSet = new pData;
$tip=array();
$r=array();
$suma=0;
foreach ($filas as $res) {
    $Z=new clsNegocio();
$fila=$Z->RpEmpleados($res['emp_codigo']);
    foreach ($fila as $value) {
   $suma=$suma+$value['enc_res'];
    $total=$suma/50;
}
$r=$total; 
$tip=$res['emp_apellido'];
 $DataSet->AddPoint($r, "Serie1");
$DataSet->AddPoint($tip, "Serie2");
}


$DataSet->AddAllSeries();
$DataSet->SetAbsciseLabelSerie("Serie2");

$Test = new pChart(500,200);
 $Test->drawFilledRoundedRectangle(7,7,293,193,5,240,240,240);
 $Test->drawRoundedRectangle(5,5,295,195,5,230,230,230);
// This will draw a shadow under the pie chart  
 $Test->drawFilledCircle(122,102,70,200,200,200);
 // Draw the pie chart
 $Test->setFontProperties("Fonts/tahoma.ttf",8);  
 $Test->drawPieGraph($DataSet->GetData(),$DataSet->GetDataDescription(),150,90,110,PIE_PERCENTAGE,TRUE,50,20,5);  
 $Test->drawPieLegend(310,15,$DataSet->GetData(),$DataSet->GetDataDescription(),250,250,250);
$Test->Render('imagen1.png');
echo '<center><strong>Reporte de Empleados</strong><br><img src="imagen1.png"></center><br>'
. '<a href="fch_empleados.php">Regresar</a>';
}else{
    echo'<center><strong>No hay Datos en esta fecha</strong></center>';
}
