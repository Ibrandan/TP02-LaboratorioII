<?php 
      require_once('html/header.html');
      $codigoMateria = mt_rand(1,25);
      if($codigoMateria < 10){
        $codigoMateria = 'P0'.$codigoMateria;
      } else {
        $codigoMateria = 'P'.$codigoMateria;
    }
    $materia = '';
    switch($codigoMateria){
        case 'P02':
        case 'P04':
        case 'P05':
        case 'P12':
        case 'P19':
        case 'P22':
            $materia = 'La materia no existe';
            break;

        case 'P01':
            $materia = 'Elementos de Computación y Lógica';
            break;

        case 'P03':
            $materia = 'Laboratorio I';
            break;

        case 'P06':
            $materia = 'Programación';
            break;

        case 'P07':
            $materia = 'Laboratorio I';
            break;

        case 'P08':
            $materia = 'Algoritmos y Estructuras de Datos';
            break;

        case 'P09':
            $materia = 'Conceptos de Bases de Datos I';
            break;

        case 'P10':
            $materia = 'Métodos Numéricos I';
            break;

        case 'P11':
            $materia = 'Taller de Lenguajes I';
            break;

        case 'P13':
            $materia = 'Arquitectura y Organización de Computadoras';
            break;

        case 'P14':
            $materia = 'Paradigmas de Programación';
            break;

        case 'P15':
            $materia = 'Conceptos de Bases de Datos II';
            break;

        case 'P16':
            $materia = 'Sistemas Operativos';
            break;

        case 'P17':
            $materia = 'Análisis y Diseño de Sistemas de Información';
            break;

        case 'P18':
            $materia = 'Comunicaciones I';
            break;

        case 'P20':
            $materia = 'Ingeniería de Software';
            break;

        case 'P21':
            $materia = 'Comunicaciones II';
            break;

        case 'P23':
            $materia = 'Taller de Lenguajes II';
            break;

        case 'P24':
            $materia = 'Taller de Legislación y Organizaciones';
            break;

        case 'P25':
            $materia = 'Sistemas Abiertos';
            break;

        default: 
            $materia = 'El código de la materia ingresado no existe';
    }
?>
<main>
    <section id="uno">
        <h2><?php echo $codigoMateria . ' - ' . $materia;?></h2>
    </section>
    <section id="dos">
    
    </section>
</main>
<?php 
      require_once('html/footer.html');
?>