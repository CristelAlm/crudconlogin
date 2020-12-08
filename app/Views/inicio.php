<!doctype html>
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
    <a class="navbar-brand" href="#"><?php echo session('usuario'); ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url('/salir') ?>">Salir <span class="sr-only">(current)</span></a>
        </li>
       
       
          </div>
        </li>
      </ul>

    </div>
  </nav>
  <div class="jumbotron">
    <h1 class="display-4">Gastos</h1>
<div class="container">
        <div class="row">
        <div class="col-sm-12">
        <form method="POST" action="<?php echo base_url().'/crear' ?>">
            <label for="concepto">Concepto de gasto</label>
            <input type="text" name="concepto" id="concepto" class="form-control">

            <label for="monto">Monto de gasto</label>
            <input type="text" name="monto" id="monto" class="form-control">

            <label for="fecha">Fecha</label>
            <input type="text" name="fecha" id="fecha" class="form-control">
            <br>
            <button class="btn btn-primary">Guardar</button>
        </form>

        </div>
        </div>
        <hr>
        <h2>Listado de gastos</h2>
        
        <div class="row">
            <div class="col-sm-12">
                <div class="table table-responsive">
                    <table class="table table-hover table-bordered">
                        <tr>
                            <th>Concepto de gasto</th>
                            <th>Monto de gasto</th>
                            <th>Fecha</th>
                        </tr>
                        <?php foreach($datos as $key): ?>
                        <tr>
                            <td><?php echo $key->concepto ?></td>
                            <td><?php echo $key->monto ?></td>
                            <td><?php echo $key->fecha ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
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