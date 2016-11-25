<!DOCTYPE html>
<html lang="en">
<title>Parcial</title>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <h3>Agregar Producto</h3>
      <div class="row">
            <form method="post" action="<?php echo base_url('Controlador/Guardar')?>">
              <div class="col-md-6">
            <div class="form-group input-group">
                <span class="input-group-addon">id:</span>
                <input type="text" readonly class="form-control" name="id"/>
            </div>

            <div class="form-group input-group">
              <span class="input-group-addon">Nombre:</span>
              <input type="text" class="form-control" name="Nombre"/>
            </div>

            <div class="form-group input-group">
              <span class="input-group-addon">Descripcion:</span>
              <input type="text" class="form-control" name="Descripcion"/>
            </div>

            <div class="form-group input-group">
              <span class="input-group-addon">Precio:</span>
              <input type="text" class="form-control" name="Precio"/>
            </div>


          <div class="text-left">
            <button class="btn btn-primary" type="submit">Guardar</button>
          </div>
          </div>
      </div>
    </form>

    <div class="clear">

    </div>
    <h3>Productos agregados</h3>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Descripcion</th>
          <th>Precio</th>
        </tr>
      </thead>
      <tbody>
        <?php
          foreach ($producto as $Productos) {
            echo "<tr>
            <td>{$Productos->ID}</td>
            <td>{$Productos->Nombre}</td>
            <td>{$Productos->Descripcion}</td>
            <td>{$Productos->Precio}</td>
            </tr>";
          }
          ?>

      </tbody>
    </table>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
