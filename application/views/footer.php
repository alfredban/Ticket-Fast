<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>TICKET-FLASH</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    
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
</head>   

<body style="background-color: #1c1c1c">
     <!-- footer start -->
     <footer class="footer">
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
</body>  
</html>