<?php
require_once 'Class/Persona.php';

$user = new Persona("Pablo", 30, 1.80);

echo $user->getNombre(); 
$user->setGenero("Transexual");
echo $user->getGenero();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document </title>
</head>
<body>

</body>
</html>