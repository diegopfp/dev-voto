<?php
	if (isset($_GET['id'])){
		$id=intval($_GET['id']);
	} else {
		header("location:index.php");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>CRUD con PHP usando Programación Orientada a Objetos</title>
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
                    <div class="col-sm-8"><h2>Editar <b>Socios</b></h2></div>
                    <div class="col-sm-4">
                        <a href="listado.php" class="btn btn-info add-new"><i class="fa fa-arrow-left"></i> Regresar</a>
                    </div>
                </div>
            </div>
            <?php
				
				include ("database.php");
				$socios= new Database();
				
				if(isset($_POST) && !empty($_POST)){
					$cod_socio = $socios->sanitize($_POST['cod_socio']);
					$nombres = $socios->sanitize($_POST['nombres']);
					$razon_social = $socios->sanitize($_POST['razon_social']);
					$correo_electronico = $socios->sanitize($_POST['correo_electronico']);
					$id_socio=intval($_POST['id_socio']);
					$res = $socios->update($cod_socio, $nombres, $razon_social, $correo_electronico,$id_socio);
					if($res){
						$message= "Datos actualizados con éxito";
						$class="alert alert-success";
						
					}else{
						$message="No se pudieron actualizar los datos";
						$class="alert alert-danger";
					}
					
					?>
				<div class="<?php echo $class?>">
				  <?php echo $message;?>
				</div>	
					<?php
				}
				$datos_socio=$socios->single_record($id);
			?>
			<div class="row">
				<form method="post">
				<div class="col-md-6">
					<label>Codigo Socio:</label>
					<input type="text" name="cod_socio" id="cod_socio" class='form-control' maxlength="15" required value="<?php echo $datos_socio->cod_socio;?>">
				</div>
				<div class="col-md-12">
					<label>Nombres:</label>
					<input type="text" name="nombres" id="nombres" class='form-control' maxlength="100" required  value="<?php echo $datos_socio->nombres;?>">
					<input type="hidden" name="id_socio" id="id_socio" class='form-control' maxlength="100"   value="<?php echo $datos_socio->id;?>">
				</div>
				<div class="col-md-12">
					<label>Razón Social:</label>
					<input type="text" name="razon_social" id="razon_social" class='form-control' maxlength="100" required value="<?php echo $datos_socio->razon_social;?>">
				</div>
				<div class="col-md-6">
					<label>Correo electrónico:</label>
					<input type="email" name="correo_electronico" id="correo_electronico" class='form-control' maxlength="64" required value="<?php echo $datos_socio->correo_electronico;?>">
				
				</div>
				
				<div class="col-md-12 pull-right">
				<hr>
					<button type="submit" class="btn btn-success">Actualizar datos</button>
				</div>
				</form>
			</div>
        </div>
    </div>     
</body>
</html>                            