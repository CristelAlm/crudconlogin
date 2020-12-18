<?php 
    $idCategoria = $datos[0]['id_categoria'];
    $categoria = $datos[0]['categoria']; 
    $descripcion = $datos[0]['descripcion'];
   
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Inicio</title>
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
					<h2>Actualizar categorias</h2>
					<hr>
					<form method="POST" action="<?php echo base_url().'/ActualizarCat' ?>">
						<input type="text" id="idCategoria" name="idCategoria" hidden="idCategoria" value="<?php echo $idCategoria ?>">
						<label for="categoria">Categoria</label>
						<input type="text" name="categoria" id="categoria" class="form-control" value="<?php echo $categoria ?>">
						<label for="descripcion">Descripción</label>
						<input type="text" name="descripcion" id="descripcion" class="form-control" value="<?php echo $descripcion ?>">
						
					
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