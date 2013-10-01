<?php
class Area {

    private $h;
    private $l;

    public function __construct($h, $l) {
        if (is_int($h) && is_int($l)) {
            $this->h = $h;
            $this->l = $l;
        }
        else {
            echo 'Erro, esperado numero inteiro';
        }
    }

    private function calcula_area() {
        return $this->h * $this->l;
    }

    public function resultado() {
        echo "Para um retangulo de altura $this->h e largura $this->l a area eh " . $this->calcula_area();
    }
}


$a = new Area(10, 5);
$a->resultado(); //50
?>
<hr>
<?php

class Fatorial {

    private $numero;

    public function __construct($numero) {
        if (is_int($numero) && $numero >= 0) {
            $this->numero = $numero;
        }
    }

    public function resposta() {
        $resposta = 1;
        for($c=1; $c <= $this->numero; $c++) {
            $resposta = $resposta * $c;
        }

        return $resposta;
    }
}

$a = new Fatorial(5);
echo $a->resposta(); //120

?>
<hr>
<?php

class Calculadora {

    private $num1;
    private $num2;

    public function __construct($num1, $num2) {

        if ( is_int($num1) && is_int($num2) ) {
            $this->num1 = $num1;
            $this->num2 = $num2;
        }
        else {
            echo "Erro, esperado dois numeros inteiros";
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

$calc = new Calculadora(10, 5);
echo $calc->Adicao(); //15
echo '<br>';
echo $calc->Subtracao(); //5
echo '<br>';
echo $calc->Multiplicacao(); //50
echo '<br>';
echo $calc->Divisao(); //2
?>