<?php
session_start();
if($_SESSION['1']!='ok'){
    session_destroy();
    header('location:../login.php');
}
?>
