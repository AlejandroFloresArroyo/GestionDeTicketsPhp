<?php
include('conexion.php');
include('seguridad_tecnico.php');
 
 $id=$_POST['id'];
 $informe=$_POST['informe'];
 $cierre=$_POST['tipo_cierre'];
 if( $id=="" || $informe=="" || $cierre=="")
 {
    echo'
    <!DOCTYPE html>
<html lang="en">

<head>
    <title>Cerrar reporte - Sistema de tickets ITT2</title>
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
    <form action="cerrar_reporte.php">
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
  $sql="UPDATE reporte SET informe_tecnico= '$informe', tipo_cierre= '$cierre' where id_reporte=$id";
  $eje=mysql_query($sql) or die ("Error en la inserccion".mysql_error());
  echo'
  <!DOCTYPE html>
<html lang="en">

<head>
    <title>Cerrar reporte - Sistema de tickets ITT2</title>
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
  El reporte ha sido cerrado con exito!
</div>
    <form action="tecnico.php">
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