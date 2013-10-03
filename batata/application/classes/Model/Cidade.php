<?php
defined('SYSPATH') or die('No direct script access.');

class Model_Cidade extends ORM {

    //muda nome da tabela
    protected $_table_name = 'cidade';

    /*
        Define relacao do tipo
            uma cidade pertence a um estado
    */
    protected $_belongs_to = array(
        'estado' => array(
            'model' => 'Estado',
            'foreign_key' => 'estado_id'
        )
    );

    /*
        Define a relacao do tipo
            muitas cidades tem muitas ruas
    */
    protected $_has_many = array(
        'ruas' => array(
            'model' => 'Rua',
            'through' => 'cidade_rua',

            'foreign_key' => 'cidade_id',
            'far_key' => 'rua_id'
        ), 
    );
}