<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>VOTO REMOTO</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/custom.css">
<link rel="stylesheet" href="css/globalcom.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Sistema de <b>Votaciones por Internet</b></h2>
                    </div>
                    <!-- <div class="col-sm-4">
                        <a href="create.php" class="btn btn-info add-new"><i class="fa fa-plus"></i> Agregar cliente</a>
                    </div>
                    --> 
                   
                    <img src="./image/logo.png" alt="Logo" width="200">
                </div>
            </div>
            <table class="table table-bordered">
                <tr>
                    <td> <a href="listado.php" class="btn btn-info add-new"><i class="fa fa-database"></i> Listado de Socios</a></td>
                    <td> <a href="create.php" class="btn btn-info add-new"><i class="fa fa-plus"></i> Agregar socio</a></td>

                </tr>
                <tr>
                    <td> <a href="create.php" class="btn btn-info add-new"><i class="fa fa-gear"></i> Generar PIN</a></td>
                    <td> <a href="create.php" class="btn btn-info add-new"><i class="fa fa-envelope"></i> Enviar datos</a></td>
                </tr>
                <tr>
                    <td> <a href="create.php" class="btn btn-info add-new"><i class="fa fa-bars"></i> Resultados</a></td>
                    <td> <a href="create.php" class="btn btn-info add-new"><i class="fa fa-envelope"></i> Enviar datos</a></td>

                </tr>
            </table>
            <div class="row">
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                <p></p>
                
            </div>
            <?php include ("inc/pie.php"); ?>
        </div>
        
    </div>   
    
</body>
</html>                            