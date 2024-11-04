<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start(); // Solo iniciar la sesión si no está ya activa
}

?>

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

<body >
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="<?=base_url('navegacion')?>">
                                        <img src="<?=base_url('assets/home/')?>img/logo.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="active" href="<?=base_url('navegacion')?>">Inicio</a></li>
                                            <li><a href="<?=base_url('ShowController/cargarShows')?>">Shows disponibles</a></li>

                                            <?php
                                            
                                            if(!$this->session->userdata('log')) {
                                            ?>
                                            <li><a href="<?=base_url('logueo')?>">Iniciar sesion</a></li>

                                            <?php
                                            } else {
                                                // Si hay un usuario en sesión, mostrar un enlace para cerrar sesión
                                                ?>
                                                <li><a href="<?=base_url('logueo/cerrarSession')?>">Cerrar sesión</a></li>

                                                <?php                                 

                                                if($this->session->userdata('rolUsuario') == 1) {
                                                ?>
                                                <li><a href="<?=base_url('navegacion/listaClientes')?>">Clientes</a></li>

                                                <?php
                                                }

                                            }
                                            ?>
   


                                            <li><a href="<?=base_url('navegacion#nosotros')?>">Info</a> 
                                            </li>
                                            <li><a href="<?=base_url()?>navegacion#footer">Contacto</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="social_icon text-right">
                                    <ul>
                                        <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                        <li><a href="https://www.instagram.com/alfredo_ivanovich/"> <i class="fa fa-instagram"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->
        
    </body>

    