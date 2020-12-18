<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Categorias</title>
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
      <div class="col-sm-12" style="background-color: #FFFFFF;">
        <div class="card-header">
        </div>
        <div class="card-body">
          <button class="bt btn-danger">
            <i class="fas fa-id-card-alt fa-6x"></i>
          </button>
          <h2>Categorias</h2>
          <button class="btn btn-primary" data-toggle="modal" data-target="#modalInsertar">
            <span class="fas fa-clipboard-check"></span> Agregar nuevo
          </button>
          <hr>
          <div class="table-responsive">
            <table class="table table-hover" id="tablaload">
              <thead>
                <tr>
                  <td align="center">Categoria</td>
                  <td align="center">Descripción</td>
                  <td align="center">Editar</td>
                  <td align="center">Eliminar</td>
                </tr>
              </thead>
              <tbody>
                <?php foreach($datos as $key): ?>
                  <tr>

                    <td align="center"><?php echo $key->categoria ?></td>
                    <td align="center"><?php echo $key->descripcion ?></td>
                    <td style="text-align: center">
                      <a href="<?php echo base_url().'/obtenerCategoria/'.$key->id_categoria?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i>Editar</a>
                    </td>
                    <td style="text-align: center">
                      <a href="<?php echo base_url().'/eliminar/'.$key->id_categoria?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>Eliminar</a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="modal fade" id="modalInsertar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> Agregar Categoria </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="<?php echo base_url().'/crear' ?>">
            <label> Categoria </label>
            <input type="text" name="categoria" id="categoria" class="form-control input-sm" >
            <label> Descripcion </label>
            <input type="text" name="descripcion" id="descripcion" class="form-control input-sm">
            <hr>
            <button type="button" class="btn btn-danger" data-dismiss="modal" >
              <span class="fas fa-times-circle"></span> Cerrar
            </button>
            <button class="btn btn-primary"><span class="fas fa-save"></span> Guardar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Actualizar Categoria</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="frmnuevoU">
            <input type="text" hidden="" id="idcategoria" name="idcategoria">
            <label> Categoria </label>
            <input type="text" name="categoria1" id="categoria1" class="form-control input-sm">
            <label> Descripcion </label>
            <input type="text" name="descripcion1" id="descripcion1" class="form-control input-sm">
            <hr>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">
              <span class="fas fa-times-circle"></span> Cerrar
            </button>
            <button class="btn btn-warning"><span class="fas fa-edit"></span>Editar</button>
          </form>
        </div>
      </div>
    </div>
        <hr>
    

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>