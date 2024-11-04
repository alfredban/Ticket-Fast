<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>TICKET-FLASH</title>
    <meta name="detalle" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?=base_url('assets/')?>css/detalle.css">

</head>

<body style="background-color:#1c1c1c">

<div class="contenedor">
        
    <div  id="foto" >

    
        <img src=" <?= base_url('assets/shows/'.$show->imagen); ?>" alt="imagen del show" >

</div>

<div  id="descripcion">

    <a> Show: <?= $show->nombre ?></a> <br>
    <a> Precio: <?= $show->precio ?></a> <br>
    <a> Fecha: <?= $show->fecha ?></a>  <br>
    <a> Capacidad: <?= $show->capacidad  ?></a> <br>
    <a> Lugares disponibles:<?= ($show->capacidad - $show->cant_reservas); ?></a>  <br>

    <form action="<?= base_url('navegacion/comprarentrada/'.$show->id_shows); ?>" method="POST">
    <p>Entradas</p>
    <input type="number" autofocus name="cant" class="form-control" id="cantidad" placeholder="Cantidad" required="" min="1" max="<?= max(1, ($show->capacidad - $show->cant_reservas)); ?>" oninput="calcularPrecio()">
    <br>
    <p>Total: <span id="precioTotal"><?= $show->precio ?></span></p>  

    <?php if($show->capacidad - $show->cant_reservas > 0){ ?>

    <button type="submit" class="btn btn-primary">Comprar</button>   

    <?php
    }else{
        ?>
    <p>ENTRADAS AGOTADAS</p>
    <?php
    }
    ?>
</form>
 
<script>
    // Precio por entrada
    const precioPorEntrada = <?= $show->precio ?>; // Cambia esto por el precio real

    function calcularPrecio() {
        const cantidad = document.getElementById('cantidad').value;
        const precioTotal = cantidad * <?= $show->precio ?>;
        document.getElementById('precioTotal').innerText = precioTotal;
    }
</script>

</div>

</div>
</body>