<?php
declare(strict_types = 1);
include 'includes/header.php';

// Metodos estaticos

class Producto {

    public static $imagen = "Imagen.jpg";

    public function __construct(protected string $nombre, public int $precio, public bool $disponible)
    {
    }

    public static function obtenerImagenProducto() {
        return self::$imagen;
    }

    public static function obtenerProducto() {
        echo ' Obteniendo producto...';
    }

    public function mostrarProducto() {
        echo "El nombre de producto es " . $this->nombre . " y su precio es de " . $this->precio;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre(string $nombre) {
        $this->nombre = $nombre;
    }
}

echo Producto::obtenerImagenProducto();

$producto = new Producto('Monitor', 3500, true);
// $producto->mostrarProducto();
echo $producto->getNombre();
$producto->setNombre('Nuevo');

echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto('PC', 12000, true);
// $producto2->mostrarProducto();

echo $producto2->getNombre();


// echo "<pre>";
// var_dump($producto2);
// echo "</pre>";

include 'includes/footer.php';