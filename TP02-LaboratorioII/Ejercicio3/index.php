<?php
    require_once('html/header.html');
    const PREF = 'AE';
    $numero = mt_rand(1,999);
    if($numero < 10){
        $numero = '00'.$numero;
    } 
    elseif($numero < 100){
        $numero = '0'.$numero;
    }
    $letra1 = chr(mt_rand(ord('F'),ord('Z')));
    $letra2 = chr(mt_rand(ord('F'),ord('Z')));
    $patente = PREF. ' '. $numero. ' '.$letra1. $letra2;
?>

<main>
    <h2>Patente generada:</h2>
    <p><?php echo $patente; ?></p>
</main>

<?php
    require_once('html/footer.html');
?>