

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
                <h1 class="panel-title colorN" style="font-family:'Times New Roman','arial'; font-size: 30px">INGRESAR AL PANEL DEL SISTEMA</h1>
                <br><br>
                <form action="<?= base_url('logueo/registrar'); ?>" method="POST">                              
                    <p>Ingrese su Usuario</p>  <input type="text" autofocus name="nombre" class="form-control" id="user" placeholder="ingrese usuario" required="" autocomplete="on">
                    <p>Ingrese su Clave</p>  <input type="password" name="contraseña" class="form-control" id="pass" placeholder="ingrese su clave" required="" autocomplete="on">
                    <p>Ingrese su nuevamente</p>  <input type="password" name="contraseña2" class="form-control" id="pass" placeholder="ingrese su clave nuevamamente" required="" autocomplete="on">
                    <p>Ingrese su correo</p>  <input type="email" name="correo" class="form-control" id="pass" placeholder="ingrese su correo" required="" autocomplete="on">

                    <hr/>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span>Registrarse</button>
                    <p><br/></p>
                </form>
                <a href="<?= base_url(''); ?>" class="btn btn-primary">incio</a>

                

            </div class="col-md-4">
        </div>
    </div>
    <h1 style="color:whitesmoke; margin-left:30px"><?php echo $conforme; ?></h1>
</body>

</html>