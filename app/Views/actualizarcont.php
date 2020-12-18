<?php 
$idContacto = $datos[0]['id_contacto'];
$nombre = $datos[0]['nombre'];
$paterno = $datos[0]['paterno']; 
$materno = $datos[0]['materno']; 
$telefono = $datos[0]['telefono']; 
$email = $datos[0]['email'];
$id_categoria = $datos[0]['id_categoria'];

?>
<?php
$mysqli = new mysqli('localhost', 'root', '', 'login');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Actualización</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#" style="color:purple; font-size=10em;"><?php echo session('usuario'); ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

        
            <a class="nav-link" href="<?php echo base_url('/categoria') ?>" style="color:purple;">Categorias</a>
          </li>
        </li>
         
            <a class="nav-link" href="<?php echo base_url('/contactos') ?>" style="color:purple;">Contactos</a>
          </li>
        </li>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url('/salir') ?>" style="color:purple;">Salir <span class="sr-only">(current)</span></a>
        </li>
       
       
          </div>
        </li>
      </ul>

    </div>
  </nav>
		<hr>
		<div class="row">
			<div class="col-sm-12">
				<div class="card-header">
				</div>
				<div class="card-body">
					<button class="bt btn-danger">
						<i class="fas fa-id-card-alt fa-6x"></i>
					</button>
					<h2>Actualizar contacto</h2>
					<hr>
					<form method="POST" action="<?php echo base_url().'/ActualizarCont' ?>">
						<input type="text" id="idContacto" name="idContacto" hidden="idContacto" value="<?php echo $idContacto ?>">
						<label> Nombre </label>
						<input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $nombre ?>">
						<label> Apellido Paterno </label>
						<input type="text" name="paterno" id="paterno" class="form-control" value="<?php echo $paterno ?>">
						<label> Apellido Materno </label>
						<input type="text" name="materno" id="materno" class="form-control" value="<?php echo $materno ?>">
						<label> Telefono </label>
						<input type="text" name="telefono" id="telefono" class="form-control" value="<?php echo $telefono ?>">
						<label> E-mail </label>
						<input type="text" name="email" id="email" class="form-control" value="<?php echo $email ?>">
						
						<label>Categoria</label>
						<select name="id_categoria" id="id_categoria" class="form-control">
							<?php
							$query = $mysqli -> query ("SELECT id_categoria, Categoria FROM t_categoria");
							while ($valores = mysqli_fetch_array($query)) {?>
								<option value="<?php echo $valores[0]?>"><?php echo $valores[1]?></option>
							<?php }?>
						</select>
						<button class="btn btn-warning">Guardar</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
</html>