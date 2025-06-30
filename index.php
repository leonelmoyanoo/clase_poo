<?php
require_once 'Utils/ManagePlanta.php';
$manage = new ManagePlanta();
$plantas = $manage->getPlantas();
foreach ($plantas as $planta) {
    echo "ID: " . $planta->getId() . "<br>";
    echo "Nombre: " . $planta->getNombre() . "<br>";
    echo "Tipo: " . $planta->getTipo() . "<br>";
    echo "Descripción: " . $planta->getDescripcion() . "<br>";
    echo "Fecha de Creación: " . $planta->getFechaCreacion() . "<br>";
    echo "<hr>";
}
echo "<br>";

$planta = $manage->getPlanta(1);