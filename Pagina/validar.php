<?php
include('conexion.php');

$usuario=$_POST["usuario"];
$pass=$_POST["contrasena"];
$sql="select * from usuario where inicio_sesion = '$usuario' and password = '$pass' ";
$eje=mysql_query($sql) or die ("Tienes error en la consulta");
$nr=mysql_num_rows($eje);

if($nr==0)
{
   echo '
   <!doctype html>
<html lang="en">
  <head>
    <title>Sistema de tickets ITT2</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">

  </head>
  <body class="bg-dark">
 <div class="container w-100 h-100 d-flex flex-column align-content-center align-items-center">
        <div class="card m-auto align-middle" style="width: 20rem;">
          <div class="card-body">
            <h4 class="card-title text-center">Sistema de tickets ITT2</h4>
            <h6 class="card-subtitle mb-2 text-muted text-center">Inicio de sesión</h6>
            <form action="validar.php" method="post">
                <div class="form-group">
                    <label for="user">Usuario</label>
                    <input type="text" name="usuario" class="form-control is-invalid" placeholder="Introduzca su usuario"> <div class="invalid-feedback">
        Por favor, revisa que tu usuario sea correcto
      </div>
                </div>
                <div class="form-group">
                    <label for="pass">Contraseña</label>
                    <input type="password" name="contrasena" class="form-control is-invalid" placeholder="Introduzca su contraseña"><div class="invalid-feedback">
        Por favor, verifique que su contraseña sea correcta
      </div>
                </div>
                <button type="submit" class="btn btn-primary w-100">Entrar</button>
            </form>
          </div>
        </div>   
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Parece que hubo un problema.</strong> Si tu usuario y contraseña parecen correctos, contacta con el administrador del sistema
</div>
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
 $fila=mysql_fetch_array($eje);
     session_start();
    $_SESSION['inicio']="si";
    $_SESSION['tipo']=$fila['tipo_usuario'];
    $_SESSION['nombre']=$fila['nombre'];
    $_SESSION['id']=$fila['id_usuario'];
    
    switch($fila['tipo_usuario'])
    {
        case "1": header('location:admin.php'); break;
        case "3": header('location:user.php'); break;
        case "2": header('location:tecnico.php'); break;
    }
}

 
?>