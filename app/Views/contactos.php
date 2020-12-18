<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


  <title>Contactos</title>
  <?php
    $mysqli = new mysqli('localhost', 'root', '', 'login');
  ?>
  
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
          <h2>Agenda</h2>
          <br>
          <button class="btn btn-primary" data-toggle="modal" data-target="#modalInsertar">
            Agregar nuevo
          </button>
          <hr>
          <div class="table-responsive">
            <table class="table table-hover" id="tablaload">
              <thead>
                <td align="center">Nombre</td>
                <td align="center">Apellido Paterno</td>
                <td align="center">Apellido Materno</td>
                <td align="center">Telefono</td>
                <td align="center">E-mail</td>
                <td align="center">Categoria</td>
                <td align="center">Editar</td>
                <td align="center">Eliminar</td>
              </thead>
              <tbody>
                <?php foreach($datos as $key): ?>
                  <tr>

                    <td align="center"><?php echo $key->nombre ?></td>
                    <td align="center"><?php echo $key->paterno ?></td>
                    <td align="center"><?php echo $key->materno ?></td>
                    <td align="center"><?php echo $key->telefono ?></td>
                    <td align="center"><?php echo $key->email ?></td>
                    <td align="center"><?php echo $key->id_categoria ?></td>
                  
                    <td style="text-align: center">
                      <a href="<?php echo base_url().'/obtenerCont/'.$key->id_contacto?>" class="btn btn-warning btn-sm">Editar</a>
                    </td>
                    <td style="text-align: center">
                      <a href="<?php echo base_url().'/eliminarcont/'.$key->id_contacto?>" class="btn btn-danger btn-sm">Eliminar</a>
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
  <!-- Modal agregar-->
  <div class="modal fade" id="modalInsertar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> Agregar Contacto </h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="<?php echo base_url().'/Crearcontacto'?>">
            <label> Nombre </label>
            <input type="text" name="nombre" id="nombre" class="form-control input-sm">
            <label> Apellido Paterno </label>
            <input type="text" name="paterno" id="paterno" class="form-control input-sm">
            <label> Apellido Materno </label>
            <input type="text" name="materno" id="materno" class="form-control input-sm">
            <label> Telefono </label>
            <input type="text" name="telefono" id="telefono" class="form-control input-sm">
            <label> E-mail </label>
            <input type="text" name="email" id="email" class="form-control input-sm">
            
            <label>Categoria</label>
            <select name="id_categoria" id="id_categoria" class="form-control">
              <option disabled selected>Escoje categoria</option>
              <?php
              $query = $mysqli -> query ("SELECT id_categoria, Categoria FROM t_categoria");
              while ($valores = mysqli_fetch_array($query)) {?>
                <option value="<?php echo $valores[0]?>"><?php echo $valores[1]?></option>
              <?php }?>
            </select>
            <hr>
            <button type="button" class="btn btn-danger" data-dismiss="modal" >
              Cerrar
            </button>
            <button class="btn btn-primary">Guardar</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#tablaload').DataTable();
    } );
  </script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script type="text/javascript">
    let mensaje = '<?php echo $mensaje ?>';

    if (mensaje =='1'){
      swal(':D','Agregado con exito','success');

    }else if(mensaje == '0'){
      swal(':(','Fallo al agregar','error');  
    }else if(mensaje == '2'){
      swal(':D','Actualizado con exito','success');  
    }else if(mensaje == '3'){
      swal(':D','Fallo al actualizar','error');  
    } else if(mensaje == '4'){
      swal(':D','Eliminado con exito','success');  
    }else if(mensaje == '5'){
      swal(':D','Fallo al eliminar','error');  
    }
  </script>



  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>