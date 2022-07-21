<?php
declare(strict_types = 1);
include 'includes/header.php';

// Definir una clase
class Producto {
    public function __construct(public string $nombre, public int $precio, public bool $disponible)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->disponible = $disponible;
    }
}

$producto = new Producto('Monitor', 3500, true);


echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto('PC', 12000, true);

echo "<pre>";
var_dump($producto2);
echo "</pre>";

include 'includes/footer.php';