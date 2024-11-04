<!DOCTYPE html>
<html lang="spanish">

<head>
    <meta charset="utf-8">
    <title>CompraRealizada-TICKET-FLASH</title>


    <!-- <link rel="manifest" href="site.webmanifest"> -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/compra.css')?>">


    <!-- <link rel="stylesheet" href="css/responsive.css"> -->


</head>

<body style="background-image: url('<?= base_url('assets/compra.jpg'); ?>'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed;">
    
    <div style="margin: 300px 200px; text-align:center;">

    <h1 style="color:whitesmoke";> ¡Gracias por elegirnos!</h1>

    <!-- mostrar datos de lo que compramos -->

    <h3 style="color:whitesmoke";>compraste:</h3>
    <p style="color:whitesmoke">show: <?= $show->nombre;   ?>    <br>  direccion: <?= $show->direccion;   ?></p>
    <div>
    <a style="color:hotpink" href="https://maps.app.goo.gl/DavvJxmBtpTYgFPNA">¿como llegar?</a>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3284.3828535995026!2d-58.45033102488527!3d-34.59447915700925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb5eb6fb40a93%3A0x1fcab11b62b55896!2sMovistar%20Arena!5e0!3m2!1ses!2sar!4v1730483186924!5m2!1ses!2sar" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>



    <form action="<?= base_url('')?>">
    <button class="btn-lindo"> Volver al inicio</button>
    </form>

    

    <form action="<?= base_url('ShowController/cargarShows')?>">
    <button class="btn-lindo"> Seguir comprando</button>
    </form>

    <p style="color:whitesmoke"> se envio te envio un mail con informacion adicional sobre el show que te puede ser necesaria en caso de dudas sobre la entrada o como llegar</p>



    </div>


</body>