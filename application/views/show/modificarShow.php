

<!DOCTYPE html>
<html lang="spanish">

<head>
    <meta charset="utf-8">
    <title>logueo-TICKET-FLASH</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body style="background-image: url('<?= base_url('assets/fondo-logueo.jpg'); ?>'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed;">
        
    <div class="container">
        <br><br>
        
        <div class="row">
            <div class="col-md-12" style="color: #e5eef0; text-align: center;">
                <div class="panel-body"></div>
                <h1 class="panel-title colorN" style="font-family:'Times New Roman','arial'; font-size: 30px">MODIFICAR SHOW</h1>
                <br><br>
                <form action="<?= base_url('ShowController/modificarShow/'.$show->id_shows); ?>" method="POST">                              
                    <p>Ingrese el nombre</p>  <input type="text" autofocus name="nombre" class="form-control" id="user" value=" <?= $show->nombre; ?>" placeholder=" <?= $show->nombre; ?>" required="" autocomplete="on">
                    <p>Ingrese el precio</p>  <input type="number" name="precio" class="form-control" id="pass" value=" <?= $show->precio; ?>" placeholder="<?= $show->precio; ?>" required="" autocomplete="on">
                    <p>Ingrese la capacidad total</p>  <input type="number" name="capacidad" class="form-control" id="pass" value=" <?= $show->capacidad; ?>" placeholder="<?= $show->capacidad; ?>" required="" autocomplete="on">
                    <p>Ingrese la localidad</p>  <input type="text" name="localidad" class="form-control" id="pass" value=" <?= $show->direccion; ?>" placeholder="<?= $show->direccion; ?>" required="" autocomplete="on">
                    <p>Ingrese la fecha</p>  <input type="date" name="fecha" class="form-control" id="pass" required="" value=" <?= $show->fecha; ?>" autocomplete="on" placeholder="<?= $show->fecha; ?>">
                    <p>Ingrese la cantidad de ya entradas reservadas</p>  <input type="number" name="cantR" class="form-control" id="pass" value=" <?= $show->cant_reservas; ?>" placeholder="<?= $show->cant_reservas; ?>" required="" autocomplete="on">
                    <hr/>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span>guardar</button>
                    <p><br/></p>
                </form>
                <a href="<?= base_url(''); ?>" class="btn btn-primary">inicio</a>

                

            </div class="col-md-4">
        </div>
    </div>
</body>

</html>