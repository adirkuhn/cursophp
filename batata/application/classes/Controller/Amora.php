<?php
defined('SYSPATH') or die('No direct script access.');

class Controller_Amora extends Controller {

    public function action_index() {

        //recupera model
        $cid = ORM::factory('Cidade')->where('nome', 'like', '%foz%');

        var_dump($cid);

        $cidades = $cid->find_all();

        //imprime todas as cidades do banco
        foreach ($cidades as $cidade) {
            echo 'Cidade: ';
            echo $cidade->nome;
            echo '<br>';
            echo 'Estado: ';
            echo $cidade->estado->nome;
            echo '<br>';
            echo 'Pais: ';
            echo $cidade->estado->pais->nome;
            echo '<hr>';
        }
    }


    public function action_pais() {

        //recuperar model
        $p = ORM::factory('Pais');

        $paises = $p->find_all();

        //imprime paises
        foreach ($paises as $key => $pais) {
            echo 'Pais: ';
            echo $pais->nome;
            echo '<br>';
            echo 'Estados: ';
            echo '<ul>';
                //lista todos os estados
                foreach ($pais->estados->find_all() as $estado) {
                    echo '<li>';
                        echo $estado->nome;
                        echo '<br>';
                        echo 'Cidades: ';
                        echo '<ul>';
                            foreach ($estado->cidades->find_all() as $cidade) {
                                echo '<li>';
                                    echo $cidade->nome;

                                    ##busca as ruas de uma cidade
                                    echo '<br>';    
                                    echo 'Ruas: ';
                                    echo '<ul>';
                                        
                                        foreach ($cidade->ruas->find_all() as $rua) {
                                            echo '<li>';
                                            echo $rua->nome;

                                                //exemplo!!!
                                                echo '<ul>';
                                                    foreach ($rua->cidades->find_all() as $cidade) {
                                                        echo '<li>';
                                                            echo $cidade->nome;
                                                        echo '</li>';
                                                    }
                                                echo '</ul>';

                                            echo '</li>';
                                        }

                                    echo '</ul>';
                                    ### fim busca ruas
                                
                                echo '</li>';
                            }
                        echo '</ul>';
                    echo '</li>'; 
                }
            echo '</ul>';

            echo '<hr/>';
        }

    }


    //muitos x muitos rua->cidade
    public function action_muitos() {

        $r = ORM::factory('Rua');
        $ruas = $r->find_all();

        foreach($ruas as $rua) {
            echo 'Rua :' . $rua->nome;
            echo '<br>';
            echo 'Cidades:';
            echo '<br>';
            echo '<ul>';
                foreach($rua->cidades->find_all() as $cidade) {
                    echo '<li>';
                        echo $cidade->nome;
                    echo '</li>';
                }
            echo '</ul>';
        }

    }

    public function action_redline() {

        $cidade = ORM::factory('Cidade', 1)
            ->as_array();

        echo '<pre>';
        $cidade['xruas'] = new Datetime()   ; 

        print_r($cidade); 


    }

    

}