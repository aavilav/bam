<?php
require '../CapaEntidad/cliente.php';
require 'CapaNegocio/clsNegocio.php';
$cli_razon=$_POST['cli_razon'];
$cli_ruc=$_POST['cli_ruc'];
$cli_direccion=$_POST['cli_direccion'];
$cli_distrito=$_POST['cli_distrito'];
$cli_nombre=$_POST['cli_nombre'];
$cli_apellido=$_POST['cli_apellido'];
$cli_telefono=$_POST['cli_telefono'];
$cli_celular=$_POST['cli_celular'];

$objC=new cliente();
$objC->setCli_codigo('');
$objC->setCli_razon($cli_razon);
$objC->setCli_ruc($cli_ruc);
$objC->setCli_direccion($cli_direccion);
$objC->setCli_distrito($cli_distrito);
$objC->setCli_nombre($cli_nombre);
$objC->setCli_apellido($cli_apellido);
$objC->setCli_telefono($cli_telefono);
$objC->setCli_celular($cli_celular);
$Reg=new clsNegocio();
$Reg->AddCliente($objC);
session_start();
         $_SESSION['msj']='cliente';
header("location: nuevocliente.php");
?>
<!--<script>
    document.domain = "localhost";
    window.top.location.href = "http://localhost/ControlCalidad/home.php"; 
</script>-->