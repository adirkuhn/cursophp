<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-02 07:45:55 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Cookie.php:67
2013-10-02 07:45:55 --- DEBUG: #0 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 /Users/adirkuhn/Projetos/cursophp/kohana/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Cookie.php:67