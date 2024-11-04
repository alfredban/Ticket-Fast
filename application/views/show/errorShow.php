<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>TICKET-FLASH</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body style="background-color:black; text-align:center; margin-bottom:150px; margin-top:150px;">
    
    <h1 style="color:whitesmoke;">no hay shows disponibles</h1>
    
    <?php
                        if($this->session->userdata('rolUsuario') == 1){ 
                            ?>
                                 <td> <a href="<?=base_url('ShowController/crearShowForm/')?>" style="color:whitesmoke">agregar shows</a>  </td> 
                         <?php
                             }
                           ?>
</body>