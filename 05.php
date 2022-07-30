<?php include 'includes/header.php';

abstract class Transporte {
    public function __construct(protected int $ruedas, protected int $capacidad)
    {
        
    }

    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas " . " y una capacidad de " . $this->capacidad . " personas ";
    }
}


class Bici extends Transporte {
    public function getInfo() : string {
        return "El transporte tiene " . $this->ruedas . " ruedas " . " y una capacidad de " . $this->capacidad . " personas Y NO GASTA GASOLINA";
    }
}

class Automovil extends Transporte {

}

$bici = new Bici(2, 1);
echo $bici->getInfo();

echo "<hr>";

$auto = new Automovil(4, 4);
echo $auto->getInfo();
include 'includes/footer.php';