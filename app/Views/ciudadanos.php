<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Municipios</h1>
        <table class="table table-border table-striped">
            <thead>
                <tr>
                    <th>DPI</th>
                    <th>Apellido</th>
                    <th>Nombre</th>
                    <th>Direccion</th>
                    <th>Tel Casa</th>
                    <th>Tel Movil</th>
                    <th>Email</th>
                    <th>Fecha nacimiento</th>
                    <th>Nivel Academico</th>
                    <th>Codigo Municipio</th>
                    <th>Contraseña</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($datos as $nivelesAdacemicos):
                ?>
                <tr>
                    <td><?php echo $nivelesAdacemicos['dpi'];?></td>
                    <td><?php echo $nivelesAdacemicos['apellido'];?></td>
                    <td><?php echo $nivelesAdacemicos['nombre'];?></td>
                    <td><?php echo $nivelesAdacemicos['direccion'];?></td>
                    <td><?php echo $nivelesAdacemicos['tel_casa'];?></td>
                    <td><?php echo $nivelesAdacemicos['tel_movil'];?></td>
                    <td><?php echo $nivelesAdacemicos['email'];?></td>
                    <td><?php echo $nivelesAdacemicos['fechanac'];?></td>
                    <td><?php echo $nivelesAdacemicos['cod_nivel_acad'];?></td>
                    <td><?php echo $nivelesAdacemicos['cod_muni'];?></td>
                    <td><?php echo $nivelesAdacemicos['contra'];?></td>
                </tr>
                <?php
                    endforeach;
                ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>