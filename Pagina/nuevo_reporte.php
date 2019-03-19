<!DOCTYPE html>
<html lang="en">

<head>
    <title>Nuevo reporte - Sistema de tickets ITT2</title>
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
            include('seguridad_usuario.php');
            $nombre= $_SESSION['nombre'];
            $id= $_SESSION['id'];
            echo "<h2 class='text-center'>Usuario: $nombre";       
            ?> 
            <hr>
            <h3 class="text-muted text-center">Nuevo reporte</h3>
            <form action="valida_reporte.php" method="post">
                    <label for="num_serie">Numero de serie</label>
                    <input type='text' name='num_serie' placeholder="No de serie del equipo descompuesto" class='form-control' size='100' maxlength='100'>
                    <label for="descripcion">Descripcion del problema</label>
                    <textarea name="descripcion" class="form-control" id="" cols="30" rows="10"></textarea> <br>
                    <button type="submit" class="btn btn-primary w-100">Enviar reporte</button>
            </form>
            <br>
            <form action="user.php">
                    <button type="submit" class="btn btn-danger w-100"><i class='icon ion-close mr-3'></i>Cancelar</button>
            </form>
</body>
</html>