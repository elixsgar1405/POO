<?php include 'includes/header.php';

require 'vendor/autoload.php';

// require 'classes/clientes.php';
// require 'classes/detalles.php';

use App\clientes;
use App\detalles;

$detalles = new App\detalles();
echo '<br>';
$clientes = new App\clientes();
echo '<br>';

include 'includes/footer.php';