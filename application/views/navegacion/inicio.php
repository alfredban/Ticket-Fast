
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

<body>
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
                                            <li><a class="active" href="<?=base_url('navegacion')?>">inicio</a></li>
                                            <li><a href="<?=base_url('ShowController/cargarShows')?>">shows disponibles</a></li>


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

                                            <li><a href="#nosotros">Info</a>
                                            </li>
                                            <li><a href="#footer">Contacto</a></li>
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

    <!-- slider_area_start -->
    <div class="slider_area">
        <div class="single_slider  d-flex align-items-center slider_bg_1 overlay2">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="slider_text text-center ">
                            <h3>ticket flash </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- music_area  -->
    <div class="music_area">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-10">
                    <div class="row align-items-center">
                                <div class="col-xl-9 col-md-9">

                                <?php if($show != NULL){ ?>
                                    <div class="music_field">
                                            <div class="thumb">
                                            <img src=" <?= base_url('assets/shows/'.$show->imagen); ?>" alt="" style="width:105px">
                                                </div>
                                                <div class="audio_name">
                                                    <div class="name">
                                                        <h4> <?= $show->nombre ?></h4>
                                                        <p>audio del ultimo show</p>
                                                    </div>
                                                        <audio preload="auto" controls>
                                                                <source src="<?=base_url('assets/theWeekend.mp3')?>">
                                                            </audio>
                                                </div>
                                    </div>
                                    

                                </div>
                                <div class="col-xl-3 col-md-3">
                                    <div class="music_btn">
                                             
                                            <a  href="<?=base_url('ShowController/detalleShow/'.$show->id_shows)?>" class="boxed-btn">comprar entradas</a>
                                    </div>
                                </div>
                                <?php   }?>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- music_area end  -->

    <!-- about_area  -->
    <div id ="nosotros" class="about_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-5 col-md-6">
                    <div class="about_thumb">
                        <img class="img-fluid" src="<?=base_url('assets/home/')?>img/about/about_1.png" alt="">
                    </div>
                </div>
                <div class="col-xl-7 col-md-6">
                    <div class="about_info">
                        <h3>TICKET FLASH</h3>
                        <p>Somos una plataforma donde lo primero que pensamos fue en tu comodidad, entonces la creamos para que pudieras conseguir las entradas a tus shows favoritos sin tener la necesidad de ir a un local, ¡todo 100% online!. <br> </p>
                       <p>Estamos ubicados en: <br></p> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d52549.934572549246!2d-58.48744938402184!3d-34.59478122616703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccac2cc6f56c5%3A0xb923f27d20e7fd1b!2sPalacio%20del%20Congreso%20de%20la%20Naci%C3%B3n%20Argentina!5e0!3m2!1ses!2sar!4v1730483925612!5m2!1ses!2sar" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <div class="signature">
                            <img src="img/about/signature.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ about_area  -->


    <!-- contact_rsvp -->
    <div class="contact_rsvp">

    </div>
    <!--/ contact_rsvp -->

     <!-- footer start -->
     <footer class="footer" id="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                            <div class="footer_widget">
                                <h3 class="footer_title">Problemas</h3>
                                <div class="subscribe-from">
                                    <!-- Formulario de suscripción -->
                                    <form id="contactForm" action="<?= base_url('#');?>" method="POST" onsubmit="return enviarCorreo()">
                                        <input type="text" id="email" name="email" placeholder="mail">
                                        <button type="submit">Enviar</button>
                                    </form>
                                    <!-- Mensaje de confirmación -->
                                    <p id="confirmMessage" class="sub_text" style="display: none; color: green;">Correo enviado correctamente.</p>
                                </div>
                                <p class="sub_text">¿Problemas con la reservas? Envía un mail (puede ser el mismo con el cual te registraste u otro) y te contactaremos</p>
                            </div>
                    </div>
                    <div class="col-xl-5 col-md-5 offset-xl-1">
                        <div class="footer_widget">
                            <h3 class="footer_title">otras formas de contactar</h3>
                            <ul>
                                <li><a href="#">alfredban22@gmail.com</a></li>
                                <li><a href="#">+54 11-6264-4335</a></li>
                                <li><a href="#">Avenida Siempreviva 123</a></li>
                            </ul>
                            <div class="socail_links">
                                <ul>
                                    <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="https://x.com/"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://www.youtube.com/"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a href="https://www.instagram.com/alfredo_ivanovich/"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end -->

    <!-- JS -->

    <script>
      function enviarCorreo() {
          // Evita el envío real del formulario
          event.preventDefault();

          // Muestra el mensaje de confirmación
          document.getElementById("confirmMessage").style.display = "block";

          // Limpia el campo de entrada
          document.getElementById("email").value = "";

          // Devuelve falso para evitar el envío del formulario
          return false;
      }
    </script>

   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
            crossorigin="anonymous">
    </script>

    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/audioplayer.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/slick.min.js"></script>
    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
		<script>
                $(function() {
                    $('audio').audioPlayer({

                    });
                });
         </script>
</body>
