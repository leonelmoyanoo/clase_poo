<?php
    require_once 'variables.php';
    //var_dump($nombre);
    echo 'Hola, mi nombre es $nombre, tengo $edad años, mido'. $altura .'metros y es ';
echo"<br>";
    print_r($categorias);
    echo"<br>";
    var_dump($categorias[1]);
    echo"<br>";

   
    print_r($persona);
    echo"<br>";
    var_dump($persona["edad"]);

    foreach ($categorias as $cat) {
        echo "La categoría $cat <br>";
    }

    
    foreach ($persona as $key => $prop) {
        echo "$key: $prop <br>";
    }


    function saludar($nombre) {
        return "Hola, $nombre";
    }
    ?>

    
    <?php if ($legal):?>
        <p>Hola, mi nombre es <?= $nombre ?>, tengo <?= $edad ?> años, mido <?= $altura; ?> metros y es <?= $legal ? 'mayor' : 'menor' ?> de edad.</p>
    <?php else:?>
        <p>Informacion privada</p>
    <?php endif;?>


    <?php foreach ($categorias as $cat): ?>
        <p>La categoría <?= $cat; ?></p>
    <?php endforeach; ?>