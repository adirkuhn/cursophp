<?php

abstract class MinhaClasse {

    abstract protected function pegaValor($numero);

    public function digaOi() {
        echo 'Ola';
    }

}


class Batata extends MinhaClasse {

    protected function pegaValor($numero) {
        return $numero;
    }

    public function imprimeValor() {
        echo $this->pegaValor(22);
    }
}

$b = new Batata();
$b->imprimeValor();
$b->digaOi();
?>