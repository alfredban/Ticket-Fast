<!DOCTYPE html>
<html lang="spanish">

<head>
    <meta charset="utf-8">
    <title>clientes-TICKET-FLASH</title>


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

<body style="background-color: black; margin-top:150px; ">
    

    <div style="color:whitesmoke; margin-bottom: 100px; margin-left:50px; margin-top:220px">

    <table border="1"  >

        <td> cliente </td>
        <td> correo </td>
        <td> entradas compradas </td>
        <td> id </td>
        <tr>

        <?php

        foreach($clientes->result() as $c){ ?>
         
            <td> <?php echo $c->nombre  ?>  </td>
            <td> <?php echo $c->correo  ?>  </td>
            <td> <?php echo $c->entradas  ?>  </td>
            <td> <?php echo $c->id_usuario  ?>  </td>
            <td> <a href="<?=base_url('navegacion/eliminarCliente/'.$c->id_usuario)?>" style="color:crimson">dar baja</a></td>
            <tr></tr>
        <?php
        }    
        ?>

        </tr>

    </table>

    </div>

</body>