<?php

use Automovil as GlobalAutomovil;
use Transporte as GlobalTransporte;
use TransporteI as GlobalTransporteI;

 include 'includes/header.php';

interface TransporteI {
    public function getInfo() : string;
    public function getRuedas() : int;
}

class Transporte implements TransporteI {
    public function __construct(protected int $ruedas, protected int $capacidad)
    {
        
    }

    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas " . " y una capacidad de " . $this->capacidad . " personas ";
    }

    public function getRuedas() : int {
        return $this->ruedas;
        }
    }

class Automovil extends Transporte implements TransporteI { 
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $color)
    {
        
    }

    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas " . " y una capacidad de " . $this->capacidad . " personas y tiene el color " . $this->color;
    }

}

echo "<pre>";
var_dump($auto = new Automovil(4,4,'rojo'));
echo "</pre>";

include 'includes/footer.php';