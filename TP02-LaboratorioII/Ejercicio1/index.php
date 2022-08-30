<?php
    require_once('html/header.html');
    $sacarAleatorio = mt_rand(65,67);
    $nivel = chr($sacarAleatorio);
?>

<section class="flex-container">
    <aside>
    <?php 
        echo '<h2> Nivel '. $nivel . '</h2>';
        if($nivel ==  'A') {
            echo '<a href="#" class="btn"> Listado de productos </a>' ; 
            echo '<a href="#" class="btn"> Informes </a>' ; 

        }
        elseif($nivel ==  'B') {
            echo '<a href="#" class="btn"> CRUD productos </a>' ; 
            echo '<a href="#" class="btn"> CRUD categorías </a>' ; 
            echo '<a href="#" class="btn"> Informes </a>' ; 
        }
        else {
            echo '<a href="#" class="btn"> CRUD productos </a>' ; 
            echo '<a href="#" class="btn"> CRUD categorías </a>' ; 
            echo '<a href="#" class="btn"> Informes </a>' ; 
            echo '<a href="#" class="btn"> CRUD usuarios </a>' ; 
            echo '<a href="#" class="btn"> Balances </a>' ; 
        } 
    ?>
    </aside>
    <main>
        <p>Parte principal</p>
    </main>
</section>

<?php
    require_once('html/footer.html');
?>