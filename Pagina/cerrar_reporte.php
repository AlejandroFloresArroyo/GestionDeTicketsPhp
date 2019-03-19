<head>
    <title>Cerrar reportes - Sistema de tickets ITT2</title>
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

                <h4 class="text-center text-muted">Atendiendo reporte</h4>
                <hr>
            <?php
                include('conexion.php');
            include('seguridad_tecnico.php');
                $id=$_GET['id'];
                $sql_get="select * from reporte where id_reporte=$id";
                $eje=mysql_query($sql_get);
                $id_tecnico=$_SESSION['id'];
                while($f=mysql_fetch_array($eje)){
                echo  "
                <form action='valida_cierre_reporte.php' method='POST'>
                <div class='row'>
                    <div class='col'>
                    <label>ID:</label>
                    <input type='text' name='id' value='$id' readonly class='form-control'>
                    </div>
                    <div class='col'>
                    <label>Usuario:</label>
                    <input type='text'' name='nombre' value='$f[id_usuario]' readonly class='form-control'>
                    </div>
                </div>        
                <div class='row'>
                    <div class='col'>
                    <label>Fecha de fallo:</label>
                    <input type='text' name='direccion' value='$f[fecha_falla]' readonly class='form-control'>
                    </div>
                    <div class='col'>
                    <label>Numero de  serie:</label>
                    <input type='text' value='$f[num_serie]' readonly name='rama' class='form-control'>
                    </div>
                </div>
                    <label>Descripcion:</label>
                    <input type='text' value='$f[descripcion]' readonly name='curp' class='form-control'>
                    <hr>  
                    <label>Informe de reparacion</label>
                    <textarea rows='3' name='informe' class='form-control'></textarea>
                    <br>
                    <label>Tipo cierre</label><br>
                    <div class='form-check form-check-inline'>
                        <label class='form-check-label'>
                            <input type='radio' class='form-check-input' name='tipo_cierre' value='Finalizado'>Finalizado
                          </label>
                    </div>
                    <div class='form-check form-check-inline'>
                        <label class='form-check-label'>
                            <input type='radio' class='form-check-input' name='tipo_cierre' value='En garantia'>En garantia
                          </label>
                    </div>
                    <button type='submit' class='btn btn-primary w-100'>Cerrar reporte</button> <br>
                </form>
                <br>
                ";}
              ?>
                  
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
    
    
  