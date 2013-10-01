<?php
/**
 * Classe equipamento, liga e desliga um equipamento
 *
 *
 * @author Adir Kuhn <adirkuhn@gmail.com>
 **/
class Equipamento {

    /**
     * @var boolean
     **/
    private $ligado = false;


    /**
     * Liga o equipamento
     *
     * @return void
     **/
    function liga() {
        $this->ligado = true;
    }

    /**
     * Desliga o equipamento
     *
     * @return void 
     **/
    function desliga() {
        $this->ligado = false;
    }

}


class EquipamentoSonoro extends Equipamento {
    private $volume;
    private $stereo;

    public function setVolume($vol) {
        if ($vol > 10) {
            $this->volume = 10;
        }
        elseif ($vol < 0) {
            $this->volume = 0;
        }
        else {
            $this->volume = $vol;
        }
    }

    public function getVolume() {
        return $this->volume;
    }

    public function mono() {
        $this->stereo = false;
    }

    public function stereo() {
        $this->stereo = true;
    }

    public function liga() {
        //chama metodo liga na classe pai
        parent::liga();

        //ajusta volume para 5
        $this->setVolume(5);
    }

}

$e = new EquipamentoSonoro;
$e->liga();

echo '<pre>';
var_dump($e);
echo '</pre>';
?>

<hr>

<?php
//cria 2 instancia de Equipamento e 2 de EquipamentoSonoro
//atribui a um array e itera os itens

$equipamento1 = new Equipamento();
$equipamento2 = new Equipamento();

$equipamentoSonoro1 = new EquipamentoSonoro();
$equipamentoSonoro2 = new EquipamentoSonoro();

$arr = array(
    $equipamento1, 
    $equipamento2,
    $equipamentoSonoro1,
    $equipamentoSonoro2
);

$arr2 = array(
    new Equipamento(),
    new Equipamento(),
    new EquipamentoSonoro(),
    new EquipamentoSonoro()
);


foreach ($arr as $valor) {
    echo '<pre>';
    print_r($valor);
    echo '</pre>';
}
?>