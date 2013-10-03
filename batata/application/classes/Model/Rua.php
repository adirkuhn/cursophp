<?php
defined('SYSPATH') or die('No direct script access.');

class Model_Rua extends ORM {

    protected $_table_name = "rua";

    protected $_has_many = array(
        'cidades' => array(
            'model' => 'Cidade',
            'through' => 'cidade_rua',

            'foreign_key' => 'rua_id',
            'far_key' => 'cidade_id'
        ), 
    );
}