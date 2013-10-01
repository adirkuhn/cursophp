<?php

class Veiculo {

    private $num_de_rodas;
    private $cor;
    private $marchas;


    public function __construct($num_de_rodas, $cor, $marchas) {
        $this->num_de_rodas = $num_de_rodas;
        $this->cor = $cor;
        $this->marchas = $marchas;
    }


    public function ligar() {
        echo "Brrrummmmmmm";
    }


    public function __toString() {
        return json_encode(array(1,2,3));
    }

}


class Moto extends Veiculo {

    private $tem_bau;

    public function __construct($tem_bau, $rodas, $cor, $marchas) {
        $this->tem_bau = $tem_bau;
        parent::__construct($rodas, $cor, $marchas);
    }

}

$m = new Moto(true, 2, 'preto', 4);
echo '<pre>';
var_dump($m);
echo '</pre>';
$m->ligar();

echo $m;
?>