<!doctype html>
<html lang="en">

<head>
    <title>Administrador - Sistema de tickets ITT2</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/ionicons.css" type="text/css">


</head>

<body class="bg-dark">
    <div class="container h-100 d-flex align-items-center justify-content-center">
        <div class="jumbotron">
            <?php
            include('conexion.php');
            include('seguridad_admin.php');
            $nombre= $_SESSION['nombre'];
            echo "<h2 class='text-center'> Bienvenido $nombre</h2> <hr>";
            echo '  <div class="container d-flex justify-content-around">
        <div class="align-self-center">
            <h4>Acciones:</h4>
        </div>
        
        <div>
            <form action="insertar_usuario.php">
                <button type="submit" class="btn btn-success">Insertar usuario</button>
            </form>
        </div>
        <div>
            <form action="ver_nuevos.php">
                <button type="submit" class="btn btn-primary">Reportes nuevos</button>
            </form>
        </div>
        <div>
            <form action="ver_finalizados.php">
                <button type="submit" class="btn btn-danger">Reportes finalizados</button>
            </form>
        </div>
        <div>
            <form action="ver_garantia.php">
                <button type="submit" class="btn btn-secondary">Reportes en garantia</button>
            </form>
        </div>
        <div>
            <form action="insertar_dispositivo.php">
                <button type="submit" class="btn">Insertar dispositivo</button>
            </form>
        </div>
    </div>
    <hr>';
            $sql="select * from usuario";
            $eje=mysql_query($sql);
            $nr=mysql_num_rows($eje);
            
            if($nr>0)
            {
                echo'<div class="container d-flex flex-column">
                <h3 class="text-center">Usuarios en el sistema</h3> <br>
                <table class="table w-100 table-striped">
    <thead>
    <tr class="bg-dark text-white text-center">
       <th>ID</th>
        <th>Nombre</th>
        <th>Direccion</th>
        <th>Login</th>
        <th>Contraseña</th>
        <th>Tipo</th>
        <th>Rama</th>
        <th>Borrar</th>
        <th>Actualizar</th>
    </tr>
  </thead>
  <tbody>';
                while($f=mysql_fetch_array($eje))
                {
                    echo"<tr class='text-center verticat-align-center'>
                            <th>$f[id_usuario]</th>
                            <td>$f[nombre]</td>
                            <td>$f[direccion]</td>
                            <td>$f[inicio_sesion]</td>
                            <td>$f[password]</td>
                            <td>$f[tipo_usuario]</td>
                            <td>$f[rama]</td>
                            <td><a href='eliminar_usuario.php?id=$f[id_usuario]'><i class='icon ion-close text-danger'></i></a></td> ";
                    echo    "<td><a href='actualizar_usuario.php?id=$f[id_usuario]'><i class='icon ion-refresh text-primary'></i></a></td>
                         </tr>";
                }
                echo'</table> </tbody> </div>';
                
            }

?>
                <br>
                <div class="d-flex justify-content-center">
                    <form action="salir.php">
                        <button type="submit" class="btn btn-dark"><i class='icon ion-close mr-3'></i>Salir del sistema</button>
                    </form>
                </div>

        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>

</html>
