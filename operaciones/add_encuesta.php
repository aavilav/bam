<?php
require '../CapaEntidad/encuesta.php';
require 'CapaNegocio/clsNegocio.php';
$enc_p1=$_GET['r1'];
$enc_p2=$_GET['r2'];
$enc_p3=$_GET['r3'];
$enc_p4=$_GET['r4'];
$enc_p5=$_GET['r5'];
$enc_p6=$_GET['r6'];
$enc_p7=$_GET['r7'];
$enc_p8=$_GET['r8'];
$enc_p9=$_GET['r9'];
$enc_p10=$_GET['r10'];
$tip_codigo=$_GET['tipo'];
$ser_codigo=$_GET['ser_codigo'];
//echo $tip_codigo;
$enc_res=($enc_p1+$enc_p2+$enc_p3+$enc_p4+$enc_p5+$enc_p6+$enc_p7+$enc_p8+$enc_p9+$enc_p10)/10;
$ObjN=new encuesta();
$ObjN->setEnc_codigo('');
$ObjN->setEnc_p1($enc_p1);
$ObjN->setEnc_p2($enc_p2);
$ObjN->setEnc_p3($enc_p3);
$ObjN->setEnc_p4($enc_p4);
$ObjN->setEnc_p5($enc_p5);
$ObjN->setEnc_p6($enc_p6);
$ObjN->setEnc_p7($enc_p7);
$ObjN->setEnc_p8($enc_p8);
$ObjN->setEnc_p9($enc_p9);
$ObjN->setEnc_p10($enc_p10);
$ObjN->setEnc_res($enc_res);
$ObjN->setTip_codigo($tip_codigo);
$ObjN->setSer_codigo($ser_codigo);

$Reg=new clsNegocio();
$Reg->AddEncuesta($ObjN);
session_start();
         $_SESSION['msj']='servicio';

header("location: cronograma.php");
?>
