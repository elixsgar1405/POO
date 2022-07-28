<?php
declare(strict_types = 1);
include 'includes/header.php';

// ENCAPSULACION

class Producto {

    // PUBLIC- SE PUEDE ACCEDER Y MODIFICAR DESDE CUALQUIER LUGAR (CLASE U OBJETO)
    // PROTECTED - SE PUEDE ACCEDER SOLO EN LA CLASE
    // PRIVATE - SOLO MIEMBROS DE LA MISMA CLASE PUEDEN ACCEDER A EL

    public function __construct(protected string $nombre, public int $precio, public bool $disponible)
    {
    }

    public function mostrarProducto() {
        echo "El nombre de producto es " . $this->nombre . " y su precio es de " . $this->precio;
    }
}

$producto = new Producto('Monitor', 3500, true);
$producto->mostrarProducto();

$producto->nombre = 'Nuevo';

echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto('PC', 12000, true);
$producto2->mostrarProducto();

echo "<pre>";
var_dump($producto2);
echo "</pre>";

include 'includes/footer.php';