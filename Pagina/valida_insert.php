<?php
include('conexion.php');

 $nombre=$_POST['nombre'];
 $direccion=$_POST['direccion'];
 $rama=$_POST['rama'];
 $curp=$_POST['curp'];
 $login=$_POST['login'];
 $pass=$_POST['pass'];
 $tipo=$_POST['tipo'];

 if($nombre=="" || $direccion=="" || $login=="" || $pass=="" || $rama=="" || $curp=="" || $tipo=="")
 {
    echo'
    <!DOCTYPE html>
<html lang="en">

<head>
    <title>Insertar usuario - Sistema de tickets ITT2</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/ionicons.css" type="text/css">
</head>

<body class="bg-dark">
<div class="container h-100 d-flex flex-column align-items-center justify-content-center">
<div class="alert alert-danger" role="alert">
  Dejaste algun campo vacio, corrigelo
</div>
    <form action="insertar_usuario.php">
    <button type="submit" class="btn btn-danger w-100">Regresar</button>
    </form>
</div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>

</html>
    '; 
 }
else
{
  $sql="INSERT INTO usuario (nombre,direccion,inicio_sesion,password,tipo_usuario,curp,rama) VALUES('$nombre','$direccion','$login','$pass','$tipo', '$curp','$rama')";
  $eje=mysql_query($sql) or die ("Error en la inserccion");
  echo'
  <!DOCTYPE html>
<html lang="en">

<head>
    <title>Insertar usuarioo - Sistema de tickets ITT2</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/ionicons.css" type="text/css">
</head>

<body class="bg-dark">
<div class="container h-100 d-flex flex-column align-items-center justify-content-center">
<div class="alert alert-primary" role="alert">
  El usuario ha sido registrado con exito!
</div>
    <form action="admin.php">
    <button type="submit" class="btn btn-primary w-100">Regresar</button>
    </form>
</div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>

</html>
    '; 
}

?>