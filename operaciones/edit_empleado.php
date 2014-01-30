<?php
require '../CapaEntidad/empleado.php';
require 'CapaNegocio/clsNegocio.php';
$emp_codigo=$_GET['emp_codigo'];
$emp_nombre=$_GET['emp_nombre'];
$emp_apellido=$_GET['emp_apellido'];
$emp_dni=$_GET['emp_dni'];
$emp_direccion=$_GET['emp_direccion'];
$emp_distrito=$_GET['emp_distrito'];
$emp_telefono=$_GET['emp_telefono'];
$emp_celular=$_GET['emp_celular'];
$emp_puesto=$_GET['emp_puesto'];

$objX=new empleado();
$objX->setEmp_codigo($emp_codigo);
$objX->setEmp_nombre($emp_nombre);
$objX->setEmp_apellido($emp_apellido);
$objX->setEmp_dni($emp_dni);
$objX->setEmp_direccion($emp_direccion);
$objX->setEmp_distrito($emp_distrito);
$objX->setEmp_telefono($emp_telefono);
$objX->setEmp_celular($emp_celular);
$objX->setEmp_puesto($emp_puesto);

$objY=new clsNegocio();
$objY->EditEmpleado($objX);
session_start();
         $_SESSION['msj']='empleado';
         
header("location: empleado.php");
?>
