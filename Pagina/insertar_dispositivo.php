<!DOCTYPE html>
<html lang="en">

<head>
    <title>Insertar dispositivo - Sistema de tickets ITT2</title>
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
            echo "<h2 class='text-center'> Administrador: $nombre</h2>";
       
            ?>

                <h4 class="text-center text-muted">Ingreso de un nuevo dispositivo</h4>
                <hr>


                <form action="valida_dispositivo.php" method="POST">
                    <label>Marca:</label>
                    <input type="text" name="marca" class="form-control">
                    <label>Modelo:</label>
                    <input type="text" name="modelo" class="form-control">
                    <label>Numero de serie:</label>
                    <input type="text" name="serie" class="form-control">
                    <label>Tipo:</label>
                    <input type="text" name="tipo" class="form-control">
                    
                    <br>
                    <button type="submit" class="btn btn-primary w-100">Registrar dispositivo</button> <br>
                </form>
                <br>
                   <form action="admin.php">
                    <button type="submit" class="btn btn-danger w-100"><i class='icon ion-close mr-3'></i>Cancelar</button>
                </form>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>

</html>
