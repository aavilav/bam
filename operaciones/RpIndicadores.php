<?php  
$fch=$_POST['fecha'];
 require 'CapaNegocio/clsNegocio.php';
include("../pChart/pData.class");
include("../pChart/pChart.class");
$K=new clsNegocio();
$filas=$K->RpIndicadores($fch);
if(count($filas)!=0){
$suma1=0;
$suma2=0;
$suma3=0;
$suma4=0;
$suma5=0;
$suma6=0;
$suma7=0;
$suma8=0;
$suma9=0;
$suma10=0;

foreach ($filas as $res) {
   $suma1=$suma1+$res['enc_p1'];
   $total1=$suma1/50;
   if($total1<0.6){
       $total1=$total1*-1;
   }elseif($total1==0.6){
       $total1=0;
   }
$suma2=$suma2+$res['enc_p2'];
   $total2=$suma2/50;
   if($total2<0.6){
       $total2=$total2*-1;
   }elseif($total2==0.6){
       $total2=0;
   }
   $suma3=$suma3+$res['enc_p3'];
   $total3=$suma3/50;
    if($total3<0.6){
       $total3=$total3*-1;
   }elseif($total3==0.6){
       $total3=0;
   }
   $suma4=$suma4+$res['enc_p4'];
   $total4=$suma4/50;
    if($total4<0.6){
       $total4=$total4*-1;
   }elseif($total4==0.6){
       $total4=0;
   }
   $suma5=$suma5+$res['enc_p5'];
   $total5=$suma5/50;
    if($total5<0.6){
       $total5=$total5*-1;
   }elseif($total5==0.6){
       $total5=0;
   }
   $suma6=$suma6+$res['enc_p6'];
   $total6=$suma6/50;
    if($total6<0.6){
       $total6=$total6*-1;
   }elseif($total6==0.6){
       $total6=0;
   }
   $suma7=$suma7+$res['enc_p7'];
   $total7=$suma7/50;
    if($total7<0.6){
       $total7=$total7*-1;
   }elseif($total7==0.6){
       $total7=0;
   }
   $suma8=$suma8+$res['enc_p8'];
   $total8=$suma8/50;
    if($total8<0.6){
       $total8=$total8*-1;
   }elseif($total8==0.6){
       $total8=0;
   }
   $suma9=$suma9+$res['enc_p9'];
   $total9=$suma9/50;
    if($total9<0.6){
       $total9=$total9*-1;
   }elseif($total9==0.6){
       $total9=0;
   }
   $suma10=$suma10+$res['enc_p10'];
   $total10=$suma10/50;
   if($total10<0.6){
       $total10=$total10*-1;
   }elseif($total10==0.6){
       $total10=0;
   }
   
 // Dataset definition   
 $DataSet = new pData;  
 $DataSet->AddPoint($total1,"Serie1");  
 $DataSet->AddPoint($total2,"Serie2");  
 $DataSet->AddPoint($total3,"Serie3");
 $DataSet->AddPoint($total4,"Serie4");  
 $DataSet->AddPoint($total5,"Serie5");  
 $DataSet->AddPoint($total6,"Serie6"); 
 $DataSet->AddPoint($total7,"Serie7");  
 $DataSet->AddPoint($total8,"Serie8");  
 $DataSet->AddPoint($total9,"Serie9"); 
 $DataSet->AddPoint($total10,"Serie10");
}
 $DataSet->AddAllSeries();  
 $DataSet->SetAbsciseLabelSerie();  
 $DataSet->SetSerieName("Equipamiento","Serie1");  
 $DataSet->SetSerieName("Presentación","Serie2");  
 $DataSet->SetSerieName("Expectativas","Serie3");
 $DataSet->SetSerieName("Orden","Serie4");  
 $DataSet->SetSerieName("Atención","Serie5");  
 $DataSet->SetSerieName("Cordiabilidad","Serie6");
 $DataSet->SetSerieName("Seguridad","Serie7");  
 $DataSet->SetSerieName("Funcionamiento","Serie8");  
 $DataSet->SetSerieName("Capacitado","Serie9");
 $DataSet->SetSerieName("Tiempo","Serie10");
  
 // Initialise the graph  
 $Test = new pChart(800,330);  
 $Test->setFontProperties("Fonts/tahoma.ttf",8);  
 $Test->setGraphArea(50,40,680,200);  
 $Test->drawFilledRoundedRectangle(7,7,693,223,5,240,240,240);  
 $Test->drawRoundedRectangle(5,5,695,225,5,230,230,230);  
 $Test->drawGraphArea(255,255,255,TRUE);  
 $Test->drawScale($DataSet->GetData(),$DataSet->GetDataDescription(),SCALE_NORMAL,150,150,150,TRUE,0,2,TRUE);     
 $Test->drawGrid(4,TRUE,230,230,230,50);  
  
 // Draw the 0 line  
 $Test->setFontProperties("Fonts/tahoma.ttf",6);  
 $Test->drawTreshold(0,143,55,72,TRUE,TRUE);  
  
 // Draw the bar graph  
 $Test->drawBarGraph($DataSet->GetData(),$DataSet->GetDataDescription(),TRUE);  
  
 // Finish the graph  
 $Test->setFontProperties("Fonts/tahoma.ttf",8);  
 $Test->drawLegend(700,40,$DataSet->GetDataDescription(),255,255,255);  
 $Test->setFontProperties("Fonts/tahoma.ttf",10);  
 $Test->drawTitle(50,22,"Indicadores",50,50,50,585);  
 $Test->Render("../img/reportes/Indicadores.png");  
 echo '<center><strong>Reporte de Indicadores</strong><br><img src="example12.png"></center><br>'
. '<a href="fch_indicadores.php">Regresar</a>';
}else{
    echo'<center><strong>No hay datos en esta fecha</strong></center>';
}