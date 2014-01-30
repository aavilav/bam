<?php
$fch=$_POST['fecha'];
require 'CapaNegocio/clsNegocio.php';
include("../pChart/pData.class");
include("../pChart/pChart.class");
$Z=new clsNegocio();
$fila=$Z->Reclamos($fch);
if(count($fila)!=0){
$DataSet = new pData;
$tip=array();
$r=array();
foreach ($fila as $value) {
   $r=$value['con']; 
   $tip=$value['cli_razon'];
   
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
echo '<center><strong>Reporte de Reclamos</strong><br><img src="imagen1.png"></center><br>'
. '<a href="fch_reclamos.php">Regresar</a>';
}else{
    echo'<center><strong>No hay Reclamos en esta fecha</strong></center>';
}