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
    <div class="container h-100 d-flex align-items-center justify-content-center">
        <div class="jumbotron">

            <?php
            include('conexion.php');
            include('seguridad_admin.php');
            $nombre= $_SESSION['nombre'];
            echo "<h2 class='text-center'> Administrador: $nombre</h2>";
       
            ?>

                <h4 class="text-center text-muted">Ingreso de un nuevo usuario</h4>
                <hr>


                <form action="valida_insert.php" method="POST">
                    <label>Nombre:</label>
                    <input type="text" name="nombre" class="form-control" size="100" maxlength="100">
                    <label>Direccion:</label>
                    <input type="text" name="direccion" class="form-control" size="100" maxlength="100">
                    <div class="row">
                        <div class="col">
                            <label>Rama:</label>
                            <input type="text" name="rama" class="form-control">
                        </div>
                        <div class="col">
                            <label>Curp:</label>
                            <input type="text" name="curp" size="15" class="form-control" maxlength="15">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label>Usuario:</label>
                            <input type="text" name="login" size="15" class="form-control" maxlength="15">
                        </div>
                        <div class="col">
                            <label>Contraseña:</label>
                            <input type="password" name="pass" size="15" class="form-control" maxlength="15">
                        </div>
                    </div>
                    <br>
                    <label>Tipo Usuario</label><br>

                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="tipo" value="1">Administrador
                          </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" checked class="form-check-input" name="tipo" value="3">Usuario
                          </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="tipo" value="2">Técnico <br>
                          </label>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary w-100">Registrar usuario</button> <br>
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
