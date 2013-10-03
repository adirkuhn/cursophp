<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-03 09:14:44 --- EMERGENCY: Kohana_Exception [ 0 ]: The pais property does not exist in the Model_Estado class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php:603
2013-10-03 09:14:44 --- DEBUG: #0 /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('pais')
#1 /Users/adirkuhn/Projetos/cursophp/batata/application/classes/Controller/Amora.php(22): Kohana_ORM->__get('pais')
#2 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Controller.php(84): Controller_Amora->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Amora))
#5 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/adirkuhn/Projetos/cursophp/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php:603
2013-10-03 09:34:30 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/classes/Controller/Amora.php [ 43 ] in file:line
2013-10-03 09:34:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-03 09:34:38 --- EMERGENCY: Kohana_Exception [ 0 ]: The estado property does not exist in the Model_Pais class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php:603
2013-10-03 09:34:38 --- DEBUG: #0 /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('estado')
#1 /Users/adirkuhn/Projetos/cursophp/batata/application/classes/Controller/Amora.php(41): Kohana_ORM->__get('estado')
#2 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Controller.php(84): Controller_Amora->action_pais()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Amora))
#5 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/adirkuhn/Projetos/cursophp/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php:603
2013-10-03 09:42:58 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW), expecting ',' or ';' ~ APPPATH/classes/Model/Pais.php [ 10 ] in file:line
2013-10-03 09:42:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-03 09:52:28 --- EMERGENCY: Kohana_Exception [ 0 ]: The cidades property does not exist in the Model_Estado class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php:603
2013-10-03 09:52:28 --- DEBUG: #0 /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('cidades')
#1 /Users/adirkuhn/Projetos/cursophp/batata/application/classes/Controller/Amora.php(50): Kohana_ORM->__get('cidades')
#2 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Controller.php(84): Controller_Amora->action_pais()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Amora))
#5 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/adirkuhn/Projetos/cursophp/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php:603
2013-10-03 10:51:51 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Amora.php [ 71 ] in /Users/adirkuhn/Projetos/cursophp/batata/application/classes/Controller/Amora.php:71
2013-10-03 10:51:51 --- DEBUG: #0 /Users/adirkuhn/Projetos/cursophp/batata/application/classes/Controller/Amora.php(71): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/adirkuhn...', 71, Array)
#1 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Controller.php(84): Controller_Amora->action_muitos()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Amora))
#4 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/adirkuhn/Projetos/cursophp/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/adirkuhn/Projetos/cursophp/batata/application/classes/Controller/Amora.php:71
2013-10-03 10:52:15 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'var' (T_VAR), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH/classes/Controller/Amora.php [ 71 ] in file:line
2013-10-03 10:52:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-03 11:24:40 --- EMERGENCY: Kohana_Exception [ 0 ]: The ruas property does not exist in the Model_Cidade class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php:603
2013-10-03 11:24:40 --- DEBUG: #0 /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('ruas')
#1 /Users/adirkuhn/Projetos/cursophp/batata/application/classes/Controller/Amora.php(58): Kohana_ORM->__get('ruas')
#2 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Controller.php(84): Controller_Amora->action_pais()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Amora))
#5 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/adirkuhn/Projetos/cursophp/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php:603
2013-10-03 11:30:33 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/classes/Controller/Amora.php [ 62 ] in file:line
2013-10-03 11:30:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-03 11:37:35 --- EMERGENCY: Kohana_Exception [ 0 ]: The nruas property does not exist in the Model_Cidade class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php:603
2013-10-03 11:37:35 --- DEBUG: #0 /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('nruas')
#1 /Users/adirkuhn/Projetos/cursophp/batata/application/classes/Controller/Amora.php(117): Kohana_ORM->__get('nruas')
#2 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Controller.php(84): Controller_Amora->action_redline()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Amora))
#5 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/adirkuhn/Projetos/cursophp/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php:603
2013-10-03 11:39:32 --- EMERGENCY: Kohana_Exception [ 0 ]: The _object property does not exist in the Model_Cidade class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php:603
2013-10-03 11:39:32 --- DEBUG: #0 /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('_object')
#1 /Users/adirkuhn/Projetos/cursophp/batata/application/classes/Controller/Amora.php(117): Kohana_ORM->__get('_object')
#2 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Controller.php(84): Controller_Amora->action_redline()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Amora))
#5 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/adirkuhn/Projetos/cursophp/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php:603
2013-10-03 11:39:59 --- EMERGENCY: Kohana_Exception [ 0 ]: The _object property does not exist in the Model_Cidade class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php:603
2013-10-03 11:39:59 --- DEBUG: #0 /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('_object')
#1 /Users/adirkuhn/Projetos/cursophp/batata/application/classes/Controller/Amora.php(118): Kohana_ORM->__get('_object')
#2 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Controller.php(84): Controller_Amora->action_redline()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Amora))
#5 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/adirkuhn/Projetos/cursophp/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php:603
2013-10-03 11:40:14 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::set(), called in /Users/adirkuhn/Projetos/cursophp/batata/application/classes/Controller/Amora.php on line 118 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 714 ] in /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php:714
2013-10-03 11:40:14 --- DEBUG: #0 /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php(714): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/adirkuhn...', 714, Array)
#1 /Users/adirkuhn/Projetos/cursophp/batata/application/classes/Controller/Amora.php(118): Kohana_ORM->set('a')
#2 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Controller.php(84): Controller_Amora->action_redline()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Amora))
#5 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/adirkuhn/Projetos/cursophp/kohana/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php:714
2013-10-03 11:40:35 --- EMERGENCY: Kohana_Exception [ 0 ]: The macarro property does not exist in the Model_Cidade class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /Users/adirkuhn/Projetos/cursophp/batata/application/classes/Controller/Amora.php:118
2013-10-03 11:40:35 --- DEBUG: #0 /Users/adirkuhn/Projetos/cursophp/batata/application/classes/Controller/Amora.php(118): Kohana_ORM->set('macarro', 'laslalaslas')
#1 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Controller.php(84): Controller_Amora->action_redline()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Amora))
#4 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/adirkuhn/Projetos/cursophp/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/adirkuhn/Projetos/cursophp/batata/application/classes/Controller/Amora.php:118
2013-10-03 15:26:49 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Cidade::query() ~ APPPATH/classes/Controller/Amora.php [ 9 ] in file:line
2013-10-03 15:26:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-03 15:26:49 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Cidade::query() ~ APPPATH/classes/Controller/Amora.php [ 9 ] in file:line
2013-10-03 15:26:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line