
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
    <link rel="stylesheet" href="<?=base_url('assets/css/shows.css')?>">
  
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


            
    <?php foreach($shows->result() as $s){ 
        
        if($s->baja == false){
        
        ?>

        <div id="shows" >
            <div class="row align-items-center">
                <div class="col-xl-5 col-md-6">
                    <div class="img">
                        <img class="img-fluid" src="<?=base_url('assets/shows/'.$s->imagen)?>" alt="" class="img">
                    </div>
                </div>
                <div class="col-xl-7 col-md-6" >
                    <div class="about_info" style="margin-left: 40px;">
                        <h3 style="color:white; font-size:30px"> <?=$s->nombre ?> </h3>
                        <p>Fecha: <?= $s->fecha ?>  <br> Direccion: <?= $s->direccion ?> <br> </p>

                        <div class="music_btn">
                                            <a href="<?=base_url('ShowController/detalleShow/'.$s->id_shows)?>" class="boxed-btn" style="color:whitesmoke">Comprar entradas</a>
                         </div>


                        <div class="signature" style="float: left; margin-left:30px;">
                            <img src="img/about/signature.png" alt=""  >
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    <hr style="border: 1px solid red; width: 80%;" />



    <?php } } ?>





    </body>