<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
<link rel="icon" type="image/png" href="images/favicon.png" />
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <form class="form-signin" method="post" action="valida.php">
        <h2 class="form-signin-heading">Login</h2>
        <input type="text" class="input-block-level" placeholder="Usuario..." required name="usuario">
        <input type="password" class="input-block-level" placeholder="Contraseña..." required name="clave">
        <select name="modulo">
        <option value="1">Operaciones</option>
        <option value="2">Administracion</option>
        <option value="3">Logistica</option>
	   <option value="4">Logistica</option>
        <option value="5">Admin</option>
        </select>
        <button class="btn btn-large btn-primary" type="submit">Ingresar</button>
      </form>
    </div> 
      <?php 
      error_reporting(E_ALL ^ E_NOTICE);
      session_start(); 
     if($_SESSION['msj']=='error'){?>
      <div class="alert alert-danger">
  <center><strong>ERROR!</strong> Los  datos ingresados son incorrectos, por favor ingrese de nuevo sus credenciales.</center>
</div>  
<?php session_destroy(); }?>
  </body>
</html>
