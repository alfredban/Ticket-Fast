
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>TICKET-FLASH</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="<?=base_url('assets/home/')?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/home/')?>css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/home/')?>css/magnific-popup.css">
    <link rel="stylesheet" href="<?=base_url('assets/home/')?>css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/home/')?>css/themify-icons.css">
    <link rel="stylesheet" href="<?=base_url('assets/home/')?>css/nice-select.css">
    <link rel="stylesheet" href="<?=base_url('assets/home/')?>css/audioplayer.css">
    <link rel="stylesheet" href="<?=base_url('assets/home/')?>css/flaticon.css">
    <link rel="stylesheet" href="<?=base_url('assets/home/')?>css/gijgo.css">
    <link rel="stylesheet" href="<?=base_url('assets/home/')?>css/animate.css">
    <link rel="stylesheet" href="<?=base_url('assets/home/')?>css/slick.css">
    <link rel="stylesheet" href="<?=base_url('assets/home/')?>css/slicknav.css">
    <link rel="stylesheet" href="<?=base_url('assets/home/')?>css/style.css">


    


    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body style="background-color:black">
 
    <!-- aca se va a mostrar los shows -->

    <div id="shows" style="margin-top:150px; text-align: center; color:whitesmoke; margin-bottom: 100px; ">

    <h2 style="color:whitesmoke"> SHOWS DISPONIBLES </h2>
    <table border="1" width="87%" style="margin-left:100px">
    <thead>
        <tr>
            <th>Imagen</th>
            <th>Show</th>
            <th>Fecha</th>
            <th>Capacidad</th>
            <th>Lugares Reservados</th>
            <th>Direccion</th>
            <th>Comprar</th>
            <th>eliminar</th>
            <?php if($this->session->userdata('rolUsuario') == 1){ ?>
                <th>Modificar</th>
            <?php } ?>
        </tr>
    </thead>
    <tbody>
        <?php foreach($shows->result() as $s){ ?>
            <tr>
                <td>
                    <img src="<?= base_url('assets/shows/'.$s->imagen); ?>" alt="<?= $s->nombre; ?>" style="width: 100px; height: auto;">
                </td>
                <td> <?= $s->nombre ?> </td>
                <td> <?= $s->fecha ?> </td>
                <td> <?= $s->capacidad ?> </td>
                <td> <?= $s->cant_reservas ?> </td>
                <td> <?= $s->direccion ?></td>
                <td> 
                    <a href="<?=base_url('ShowController/detalleShow/'.$s->id_shows)?>" style="color:whitesmoke">detalles</a>  
                </td>
                <?php if($this->session->userdata('rolUsuario') == 1){ ?>
                    <td> 
                        <a href="<?=base_url('ShowController/modShow/'.$s->id_shows)?>" style="color:whitesmoke">modificar</a>  
                    </td>

                    <td>

              <?php if( $s->baja == 0){   ?>

                    <a href="<?=base_url('ShowController/elimnarShow/'.$s->id_shows)?>" style="color:red">dar baja</a>  

            <?php  }else { ?>

                   <a href="<?=base_url('ShowController/darAlta/'.$s->id_shows)?>" style="color:red">dar alta</a>


                <?php   } ?>


                   </td>

                <?php } ?>

            </tr>
        <?php } ?>
    </tbody>
</table>
    <?php
                        if($this->session->userdata('rolUsuario') == 1){ 
                            ?>
                                 <td> <a href="<?=base_url('ShowController/crearShowForm/')?>" style="color:whitesmoke">agregar shows</a>  </td> 
                         <?php
                             }
                           ?>
    </div>

    </body>