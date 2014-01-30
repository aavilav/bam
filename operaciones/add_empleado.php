<?php
require '../CapaEntidad/empleado.php';
require 'CapaNegocio/clsNegocio.php';
$emp_nombre=$_POST['emp_nombre'];
$emp_apellido=$_POST['emp_apellido'];
$emp_dni=$_POST['emp_dni'];
$emp_direccion=$_POST['emp_direccion'];
$emp_distrito=$_POST['emp_distrito'];
$emp_telefono=$_POST['emp_telefono'];
$emp_celular=$_POST['emp_celular'];
$emp_puesto=$_POST['emp_puesto'];

$objE=new empleado();
$objE->setEmp_codigo('');
$objE->setEmp_nombre($emp_nombre);
$objE->setEmp_apellido($emp_apellido);
$objE->setEmp_dni($emp_dni);
$objE->setEmp_direccion($emp_direccion);
$objE->setEmp_distrito($emp_distrito);
$objE->setEmp_telefono($emp_telefono);
$objE->setEmp_celular($emp_celular);
$objE->setEmp_puesto($emp_puesto);

$Reg= new clsDatos();
$Reg->AddEmpleado($objE);
session_start();
         $_SESSION['msj']='empleado';

header("location: nuevoempleado.php");
?>
