<?php
    require_once('html/header.html');
    $carta1 = mt_rand(1,13);
    $carta2 = mt_rand(1,13);
    $carta3 = mt_rand(1,13);

    $total = $carta1 + $carta2 + $carta3;
    $carta1 = 'A';
    $carta2 = 'K';
    $carta3 = 'J';
    if($total == 21) {
        $mensaje = "GANADOR!";
    }
    else {
        $mensaje = "PUNTOS OBTENIDOS:".$total;
    }
?>
<body>
<section>
    <article class="carta">
        <p><?php echo $carta1; ?></p>
        <p><?php echo $carta1; ?></p>
    </article>
    <article class="carta">
        <p><?php echo $carta2; ?></p>
        <p><?php echo $carta2; ?></p>
    </article>
    <article class="carta">
        <p><?php echo $carta3; ?></p>
        <p><?php echo $carta3; ?></p>
    </article>
</section>
</body>
<?php
    require_once('html/footer.html');
?>