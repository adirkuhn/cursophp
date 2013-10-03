<?php
defined('SYSPATH') or die('No direct script access.');

class Model_Estado extends ORM {

    protected $_table_name = 'estado';

    protected $_belongs_to = array(
        'pais' => array(
            'model' => 'Pais',
            'foreign_key' => 'pais_id',
        ),
    );


    protected $_has_many = array(
        'cidades' => array(
            'model' => 'Cidade',
            'foreign_key' => 'estado_id'
        ),
    );

}