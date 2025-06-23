<?php
require_once 'Planta.php';
require_once 'Catalogo.php';
$amapola = new Planta(1, 
"Amapola", 
"Flora", 
"Planta ornamental de flores rojas", 
"2023-10-01");
$aloevera = new Planta(2,
"Aloe Vera",
"Flora",
"Planta medicinal con propiedades curativas",
"2023-10-02");

$catalogo = new Catalogo();
$catalogo->setPlanta($amapola);
$catalogo->setPlanta($aloevera);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1></h1>Plantas</h1>
    <ul>
        <?php foreach ($catalogo->listarPlantas() as $planta): ?>
            <li>
                <strong><?= $planta->getNombre() ?></strong><br>
                Tipo: <?= $planta->getTipo() ?><br>
                Descripción: <?= $planta->getDescripcion() ?><br>
                Fecha de creación: <?= $planta->getFechaCreacion() ?><br>
                Precio: <?= $planta->getPrecio() ?? 'No disponible' ?><br>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>