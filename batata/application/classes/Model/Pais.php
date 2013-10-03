<?php
defined('SYSPATH') or die('No direct script access.');

class Model_Pais extends ORM {

    protected $_table_name = 'pais';


    //um pais tem muitos estados
    protected $_has_many = array(
        'estados' => array(
            'model' => 'Estado',
            'foreign_key' => 'pais_id'
        ),
    );

}