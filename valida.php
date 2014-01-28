<?php
 session_start();
$con=mysql_connect('localhost','root','root') or die('Error en el servidor');
mysql_select_db('control2',$con)or die('Error en la base de datos');
$usu=$_POST['usuario'];
$cla=$_POST['clave'];
$consulta="select * from usuario where usu_nombre='$usu' and usu_clave='$cla'";
$resultado=  mysql_query($consulta);
$num_regsitros=  mysql_num_rows($resultado);
if($num_regsitros==1){
    $_SESSION['auth']='ok';
        header('location:index.php');
}
else   {
    $_SESSION['msj']='error';
    header('location:login.php');
}
?>
