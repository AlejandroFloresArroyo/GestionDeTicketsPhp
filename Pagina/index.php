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
    <link rel="stylesheet" href="css/ionicons.css" type="text/css">

</head>

<body class="bg-dark">
    <div class="container w-100 h-100 d-flex flex-column align-items-center">
        <div class="card m-auto align-middle" style="width: 20rem;">
            <div class="card-body">
                <h4 class="card-title text-center">Sistema de tickets ITT2</h4>
                <h6 class="card-subtitle mb-2 text-muted text-center">Inicio de sesión</h6>               
                <hr>
                <form action="validar.php" method="post">
                    <div class="form-group">
                        <div class="input-group mb-2 mb-sm-0">
                            <div class="input-group-addon"><i class='icon ion-android-person'></i></div>
                            <input type="text" name="usuario" class="form-control" placeholder="Introduzca su usuario">
                         </div>
                        
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-2 mb-sm-0">
                            <div class="input-group-addon"><i class='icon ion-locked'></i></div>
                            <input type="password" name="contrasena" class="form-control" placeholder="Introduzca su contraseña">
                         </div>
                        
                    </div>
                    
                    <br><button type="submit" class="btn btn-primary w-100">Entrar</button>
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
