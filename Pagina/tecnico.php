<!doctype html>
<html lang="en">

<head>
    <title>Tecnico - Sistema de tickets ITT2</title>
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
            include('seguridad_tecnico.php');
            $nombre= $_SESSION['nombre'];
            $id_usuario=$_SESSION['id'];
            echo "<h2 class='text-center'> Tecnico $nombre</h2> <hr>";
            $sql="SELECT * FROM reporte WHERE tipo_cierre='Nuevo'";
            $eje=mysql_query($sql);
            $nr=mysql_num_rows($eje);
            
            if($nr>0)
            {
                echo'<div class="container d-flex flex-column">
                <h3 class="text-center">Reportes nuevos</h3> <br>
                <table class="table w-100 table-striped">
    <thead>
    <tr class="bg-dark text-white text-center">
        <th>Id</th>
        <th>Num. serie</th>
        <th>Descripcion</th>
        <th>Fecha</th>
        <th>Estado</th>
        <th>Tomar caso</th>
    </tr>
  </thead>
  <tbody>';
                while($f=mysql_fetch_array($eje))
                {
                    echo"<tr class='text-center verticat-align-center'>
                            <th>$f[id_reporte]</th>
                            <td>$f[num_serie]</td>
                            <td>$f[descripcion]</td>
                            <td>$f[fecha_falla]</td>
                            <td>$f[tipo_cierre]</td>
                            <td><a href='cerrar_reporte.php?id=$f[id_reporte]'><i class='icon ion-settings text-primary'></i></a></td> 
                         </tr>";
                }
                echo'</table> </tbody> </div>';
                
            }

?>
                <br>
                <div class="d-flex justify-content-center">
                    <form action="salir.php">
                        <button type="submit" class="btn <btn-primary></btn-primary>"><i class='icon ion-close mr-3'></i>Salir del sistema</button>
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
