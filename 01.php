<?php include 'includes/header.php';

// Definir una clase
class Producto {
    
}

$producto = new Producto();
$producto->nombre = 'PC';
$producto->precio = 1200;
$producto->disponible = true;

echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto();
$producto2->nombre = 'Monitor';
$producto2->precio = 500;
$producto2->disponible = true;

echo "<pre>";
var_dump($producto2);
echo "</pre>";

include 'includes/footer.php';