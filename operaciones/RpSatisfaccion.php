<?php
$fch=$_POST['fecha'];
require 'CapaNegocio/clsNegocio.php';
include("../pChart/pData.class");
include("../pChart/pChart.class");
$Z=new clsNegocio();
$fila=$Z->ConsultaEncuestas($fch);
//$R1=new clsNegocio();
//$n1=$R1->PreEncuesta();
if(count($fila)!=0){
$R2=new clsNegocio();
$n2=$R2->PostEncuesta($fch);
$r2=array();
$tip=array();
$r=array();
$tip2=array();
$DataSet = new pData;
foreach ($fila as $value) {
    $st=0;
    $res1=$value['enc_res']; 
   $tip=$value['cli_razon'];
   $con=count($res1);
   for ($i=0; $i<$con; $i++){
   $res=$value['enc_res']; 
   $st=$st+$res;   
   $total=$st/2;
   $r=$total;
   }
 $DataSet->AddPoint($r, "Serie1");
$DataSet->AddPoint($tip, "Serie2");
}
$DataSet->AddAllSeries();
$DataSet->SetAbsciseLabelSerie("Serie2");

$Test = new pChart(500,200);
 $Test->drawFilledRoundedRectangle(7,7,293,193,5,240,240,240);
 $Test->drawRoundedRectangle(5,5,295,195,5,230,230,230);

 // Draw the pie chart
 $Test->setFontProperties("Fonts/tahoma.ttf",8);  
 $Test->drawPieGraph($DataSet->GetData(),$DataSet->GetDataDescription(),150,90,110,PIE_PERCENTAGE,TRUE,50,20,5);  
 $Test->drawPieLegend(310,15,$DataSet->GetData(),$DataSet->GetDataDescription(),250,250,250);
$Test->Render('imagen1.png');
echo '<center><strong>Expectativa</strong><br><img src="imagen1.png"></center>';

$DataSet2 = new pData;
foreach ($n2 as $value1) {
    $st1=0;
    $res2=$value1['enc_res']; 
   $tip2=$value1['cli_razon'];
   $con2=count($res2);
   for ($i2=0; $i2<$con2; $i2++){
   $res1=$value1['enc_res']; 
   $st1=$st1+$res1;   
   $total1=$st1/2;
   $r2=$total1;
   }
 $DataSet2->AddPoint($r2, "Serie1");
$DataSet2->AddPoint($tip2, "Serie2");
}
$DataSet2->AddAllSeries();
$DataSet2->SetAbsciseLabelSerie("Serie2");

$Test2 = new pChart(500,200);
 $Test2->drawFilledRoundedRectangle(7,7,293,193,5,240,240,240);
 $Test2->drawRoundedRectangle(5,5,295,195,5,230,230,230);

 // Draw the pie chart
 $Test2->setFontProperties("Fonts/tahoma.ttf",8);  
 $Test2->drawPieGraph($DataSet2->GetData(),$DataSet2->GetDataDescription(),150,90,110,PIE_PERCENTAGE,TRUE,50,20,5);  
 $Test2->drawPieLegend(310,15,$DataSet2->GetData(),$DataSet2->GetDataDescription(),250,250,250);
$Test2->Render('imagen2.png');
echo '<center><strong>Recibido</strong><br><img src="imagen2.png"></center<br>'
. '<a href="fch_satisfaccion.php">Regresar</a>';
}else{
    echo'<center><strong>No hay datos en esta fecha</strong></center>';
}
