<?php
 session_start();
$con=mysql_connect('localhost','root','root') or die('Error en el servidor');
mysql_select_db('bam',$con)or die('Error en la base de datos');
$usu=$_POST['usuario'];
$cla=$_POST['clave'];
$mod=$_POST['modulo'];
$consulta="select * from usuario where usu_nombre='$usu' and usu_clave='$cla' and mod_codigo=$mod";
$resultado=  mysql_query($consulta);
$num_regsitros=  mysql_num_rows($resultado);
if($num_regsitros==1){
    if($mod==1){
        $_SESSION['1']='ok';
        header('location:operaciones/index.php');
    }else if ($mod==2){
        $_SESSION['2']='ok';
        header('location:administracion/index.php');
    }else if ($mod==3){
        $_SESSION['3']='ok';
        header('location:logistica/index.php');
    }else if ($mod==4){
        $_SESSION['4']='ok';
        header('location:marketing/index.php');
    }else if ($mod==5){
        $_SESSION['5']='ok';
        header('location:index.php');
    } 
}
else   {
    $_SESSION['msj']='error';
    header('location:login.php');
}
?>
