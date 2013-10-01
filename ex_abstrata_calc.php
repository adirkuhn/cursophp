<?php

abstract class Calc {

    abstract function Adicao();

    abstract function Subtracao();

    abstract function Multiplicacao();

    abstract function Divisao();

}


class Calculadora extends Calc {

    private $num1;
    private $num2;

    public function __construct($n, $n2) {

        if ( is_int($n) && is_int($n2) ) {
            $this->num1 = $n;
            $this->num2 = $n2;
        }
        else {
            throw new InvalidArgumentException('Parametros Invalidos');
        }

    }

    public function Adicao() {
        return $this->num1 + $this->num2;
    }

    public function Subtracao() {
        return $this->num1 - $this->num2;
    }

    public function Multiplicacao() {
        return $this->num1 * $this->num2;
    }

    public function Divisao() {
        return $this->num1 / $this->num2;
    }

}

$c = new Calculadora(10, 5);
echo $c->Adicao(); //15
echo '<hr>';
echo $c->Subtracao(); //5
echo '<hr>';
echo $c->Multiplicacao(); //50
echo '<hr>';
echo $c->Divisao(); //2

?>