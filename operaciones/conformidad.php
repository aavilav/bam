<?php
require '../CapaEntidad/servicio.php';
require 'CapaNegocio/clsNegocio.php';
$ser_codigo=$_GET['ser_codigo'];
$ser_con=$_GET['ser_con'];

$objC=new servicio();
$objC->setSer_codigo($ser_codigo);
$objC->setSer_con($ser_con);

$Reg=new clsNegocio();
$Reg->EditConformidad($objC);
session_start();
$_SESSION['msj']='servicio';
header("location: cronograma.php");
?>
