<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-02 07:45:55 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Cookie.php:67
2013-10-02 07:45:55 --- DEBUG: #0 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 /Users/adirkuhn/Projetos/cursophp/kohana/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Cookie.php:67
2013-10-02 13:40:11 --- EMERGENCY: View_Exception [ 0 ]: The requested view blog/novo could not be found ~ DOCROOT/Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/View.php [ 257 ] in /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/View.php:137
2013-10-02 13:40:11 --- DEBUG: #0 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/View.php(137): Kohana_View->set_filename('blog/novo')
#1 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/View.php(30): Kohana_View->__construct('blog/novo', NULL)
#2 /Users/adirkuhn/Projetos/cursophp/batata/application/classes/Controller/Blog.php(23): Kohana_View::factory('blog/novo')
#3 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Controller.php(84): Controller_Blog->action_novo()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#6 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/adirkuhn/Projetos/cursophp/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/View.php:137
2013-10-02 14:11:18 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php:1302
2013-10-02 14:11:18 --- DEBUG: #0 /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/adirkuhn/Projetos/cursophp/batata/application/classes/Controller/Blog.php(33): Kohana_ORM->save()
#3 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Controller.php(84): Controller_Blog->action_novo()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#6 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/adirkuhn/Projetos/cursophp/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php:1302
2013-10-02 14:28:11 --- EMERGENCY: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Validation::rule() must be of the type array, string given, called in /Users/adirkuhn/Projetos/cursophp/batata/system/classes/Kohana/Validation.php on line 242 and defined ~ SYSPATH/classes/Kohana/Validation.php [ 211 ] in /Users/adirkuhn/Projetos/cursophp/batata/system/classes/Kohana/Validation.php:211
2013-10-02 14:28:11 --- DEBUG: #0 /Users/adirkuhn/Projetos/cursophp/batata/system/classes/Kohana/Validation.php(211): Kohana_Core::error_handler(4096, 'Argument 3 pass...', '/Users/adirkuhn...', 211, Array)
#1 /Users/adirkuhn/Projetos/cursophp/batata/system/classes/Kohana/Validation.php(242): Kohana_Validation->rule('author', 'not_empty', 'Autor n??o pode...')
#2 /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php(410): Kohana_Validation->rules('author', Array)
#3 /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php(1269): Kohana_ORM->_validation()
#4 /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#5 /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#6 /Users/adirkuhn/Projetos/cursophp/batata/application/classes/Controller/Blog.php(35): Kohana_ORM->save()
#7 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Controller.php(84): Controller_Blog->action_novo()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/adirkuhn/Projetos/cursophp/kohana/index.php(118): Kohana_Request->execute()
#13 {main} in /Users/adirkuhn/Projetos/cursophp/batata/system/classes/Kohana/Validation.php:211
2013-10-02 14:29:17 --- EMERGENCY: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Validation::rule() must be of the type array, string given, called in /Users/adirkuhn/Projetos/cursophp/batata/system/classes/Kohana/Validation.php on line 242 and defined ~ SYSPATH/classes/Kohana/Validation.php [ 211 ] in /Users/adirkuhn/Projetos/cursophp/batata/system/classes/Kohana/Validation.php:211
2013-10-02 14:29:17 --- DEBUG: #0 /Users/adirkuhn/Projetos/cursophp/batata/system/classes/Kohana/Validation.php(211): Kohana_Core::error_handler(4096, 'Argument 3 pass...', '/Users/adirkuhn...', 211, Array)
#1 /Users/adirkuhn/Projetos/cursophp/batata/system/classes/Kohana/Validation.php(242): Kohana_Validation->rule('author', 'n', 'o')
#2 /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php(410): Kohana_Validation->rules('author', Array)
#3 /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php(1269): Kohana_ORM->_validation()
#4 /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#5 /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#6 /Users/adirkuhn/Projetos/cursophp/batata/application/classes/Controller/Blog.php(35): Kohana_ORM->save()
#7 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Controller.php(84): Controller_Blog->action_novo()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/adirkuhn/Projetos/cursophp/kohana/index.php(118): Kohana_Request->execute()
#13 {main} in /Users/adirkuhn/Projetos/cursophp/batata/system/classes/Kohana/Validation.php:211
2013-10-02 14:29:19 --- EMERGENCY: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Validation::rule() must be of the type array, string given, called in /Users/adirkuhn/Projetos/cursophp/batata/system/classes/Kohana/Validation.php on line 242 and defined ~ SYSPATH/classes/Kohana/Validation.php [ 211 ] in /Users/adirkuhn/Projetos/cursophp/batata/system/classes/Kohana/Validation.php:211
2013-10-02 14:29:19 --- DEBUG: #0 /Users/adirkuhn/Projetos/cursophp/batata/system/classes/Kohana/Validation.php(211): Kohana_Core::error_handler(4096, 'Argument 3 pass...', '/Users/adirkuhn...', 211, Array)
#1 /Users/adirkuhn/Projetos/cursophp/batata/system/classes/Kohana/Validation.php(242): Kohana_Validation->rule('author', 'n', 'o')
#2 /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php(410): Kohana_Validation->rules('author', Array)
#3 /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php(1269): Kohana_ORM->_validation()
#4 /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#5 /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#6 /Users/adirkuhn/Projetos/cursophp/batata/application/classes/Controller/Blog.php(35): Kohana_ORM->save()
#7 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Controller.php(84): Controller_Blog->action_novo()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#10 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/adirkuhn/Projetos/cursophp/kohana/index.php(118): Kohana_Request->execute()
#13 {main} in /Users/adirkuhn/Projetos/cursophp/batata/system/classes/Kohana/Validation.php:211
2013-10-02 14:29:48 --- EMERGENCY: ErrorException [ 2 ]: Illegal offset type ~ APPPATH/classes/Model/Post.php [ 11 ] in /Users/adirkuhn/Projetos/cursophp/batata/application/classes/Model/Post.php:11
2013-10-02 14:29:48 --- DEBUG: #0 /Users/adirkuhn/Projetos/cursophp/batata/application/classes/Model/Post.php(11): Kohana_Core::error_handler(2, 'Illegal offset ...', '/Users/adirkuhn...', 11, Array)
#1 /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php(408): Model_Post->rules()
#2 /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php(1269): Kohana_ORM->_validation()
#3 /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#4 /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#5 /Users/adirkuhn/Projetos/cursophp/batata/application/classes/Controller/Blog.php(35): Kohana_ORM->save()
#6 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Controller.php(84): Controller_Blog->action_novo()
#7 [internal function]: Kohana_Controller->execute()
#8 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /Users/adirkuhn/Projetos/cursophp/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /Users/adirkuhn/Projetos/cursophp/batata/application/classes/Model/Post.php:11
2013-10-02 14:30:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 1 ~ SYSPATH/classes/Kohana/Validation.php [ 376 ] in /Users/adirkuhn/Projetos/cursophp/batata/system/classes/Kohana/Validation.php:376
2013-10-02 14:30:09 --- DEBUG: #0 /Users/adirkuhn/Projetos/cursophp/batata/system/classes/Kohana/Validation.php(376): Kohana_Core::error_handler(8, 'Undefined offse...', '/Users/adirkuhn...', 376, Array)
#1 /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php(1273): Kohana_Validation->check()
#2 /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#3 /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#4 /Users/adirkuhn/Projetos/cursophp/batata/application/classes/Controller/Blog.php(35): Kohana_ORM->save()
#5 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Controller.php(84): Controller_Blog->action_novo()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#8 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/adirkuhn/Projetos/cursophp/kohana/index.php(118): Kohana_Request->execute()
#11 {main} in /Users/adirkuhn/Projetos/cursophp/batata/system/classes/Kohana/Validation.php:376
2013-10-02 14:30:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 1 ~ SYSPATH/classes/Kohana/Validation.php [ 376 ] in /Users/adirkuhn/Projetos/cursophp/batata/system/classes/Kohana/Validation.php:376
2013-10-02 14:30:12 --- DEBUG: #0 /Users/adirkuhn/Projetos/cursophp/batata/system/classes/Kohana/Validation.php(376): Kohana_Core::error_handler(8, 'Undefined offse...', '/Users/adirkuhn...', 376, Array)
#1 /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php(1273): Kohana_Validation->check()
#2 /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#3 /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#4 /Users/adirkuhn/Projetos/cursophp/batata/application/classes/Controller/Blog.php(35): Kohana_ORM->save()
#5 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Controller.php(84): Controller_Blog->action_novo()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#8 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/adirkuhn/Projetos/cursophp/kohana/index.php(118): Kohana_Request->execute()
#11 {main} in /Users/adirkuhn/Projetos/cursophp/batata/system/classes/Kohana/Validation.php:376
2013-10-02 14:31:47 --- EMERGENCY: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Validation::rules() must be of the type array, string given, called in /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php on line 410 and defined ~ SYSPATH/classes/Kohana/Validation.php [ 238 ] in /Users/adirkuhn/Projetos/cursophp/batata/system/classes/Kohana/Validation.php:238
2013-10-02 14:31:47 --- DEBUG: #0 /Users/adirkuhn/Projetos/cursophp/batata/system/classes/Kohana/Validation.php(238): Kohana_Core::error_handler(4096, 'Argument 2 pass...', '/Users/adirkuhn...', 238, Array)
#1 /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php(410): Kohana_Validation->rules(0, 'author::not_emp...')
#2 /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php(1269): Kohana_ORM->_validation()
#3 /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#4 /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#5 /Users/adirkuhn/Projetos/cursophp/batata/application/classes/Controller/Blog.php(35): Kohana_ORM->save()
#6 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Controller.php(84): Controller_Blog->action_novo()
#7 [internal function]: Kohana_Controller->execute()
#8 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /Users/adirkuhn/Projetos/cursophp/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /Users/adirkuhn/Projetos/cursophp/batata/system/classes/Kohana/Validation.php:238
2013-10-02 15:32:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/blog/editar.php [ 3 ] in /Users/adirkuhn/Projetos/cursophp/batata/application/views/blog/editar.php:3
2013-10-02 15:32:27 --- DEBUG: #0 /Users/adirkuhn/Projetos/cursophp/batata/application/views/blog/editar.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/adirkuhn...', 3, Array)
#1 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/View.php(61): include('/Users/adirkuhn...')
#2 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/adirkuhn...', Array)
#3 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /Users/adirkuhn/Projetos/cursophp/batata/application/classes/Controller/Blog.php(62): Kohana_Response->body(Object(View))
#6 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Controller.php(84): Controller_Blog->action_editar()
#7 [internal function]: Kohana_Controller->execute()
#8 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /Users/adirkuhn/Projetos/cursophp/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /Users/adirkuhn/Projetos/cursophp/batata/application/views/blog/editar.php:3
2013-10-02 15:33:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/blog/editar.php [ 3 ] in /Users/adirkuhn/Projetos/cursophp/batata/application/views/blog/editar.php:3
2013-10-02 15:33:03 --- DEBUG: #0 /Users/adirkuhn/Projetos/cursophp/batata/application/views/blog/editar.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/adirkuhn...', 3, Array)
#1 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/View.php(61): include('/Users/adirkuhn...')
#2 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/adirkuhn...', Array)
#3 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /Users/adirkuhn/Projetos/cursophp/batata/application/classes/Controller/Blog.php(62): Kohana_Response->body(Object(View))
#6 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Controller.php(84): Controller_Blog->action_editar()
#7 [internal function]: Kohana_Controller->execute()
#8 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /Users/adirkuhn/Projetos/cursophp/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /Users/adirkuhn/Projetos/cursophp/batata/application/views/blog/editar.php:3
2013-10-02 15:33:03 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH/classes/Controller/Blog.php [ 63 ] in file:line
2013-10-02 15:33:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-02 15:33:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/blog/editar.php [ 3 ] in /Users/adirkuhn/Projetos/cursophp/batata/application/views/blog/editar.php:3
2013-10-02 15:33:04 --- DEBUG: #0 /Users/adirkuhn/Projetos/cursophp/batata/application/views/blog/editar.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/adirkuhn...', 3, Array)
#1 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/View.php(61): include('/Users/adirkuhn...')
#2 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/adirkuhn...', Array)
#3 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /Users/adirkuhn/Projetos/cursophp/batata/application/classes/Controller/Blog.php(62): Kohana_Response->body(Object(View))
#6 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Controller.php(84): Controller_Blog->action_editar()
#7 [internal function]: Kohana_Controller->execute()
#8 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#9 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /Users/adirkuhn/Projetos/cursophp/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /Users/adirkuhn/Projetos/cursophp/batata/application/views/blog/editar.php:3
2013-10-02 15:33:04 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH/classes/Controller/Blog.php [ 63 ] in file:line
2013-10-02 15:33:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-02 15:33:20 --- EMERGENCY: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH/classes/Controller/Blog.php [ 61 ] in file:line
2013-10-02 15:33:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-02 15:33:20 --- EMERGENCY: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH/classes/Controller/Blog.php [ 61 ] in file:line
2013-10-02 15:33:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-02 15:33:32 --- EMERGENCY: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH/classes/Controller/Blog.php [ 61 ] in file:line
2013-10-02 15:33:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-02 15:33:33 --- EMERGENCY: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH/classes/Controller/Blog.php [ 61 ] in file:line
2013-10-02 15:33:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-02 15:33:33 --- EMERGENCY: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH/classes/Controller/Blog.php [ 61 ] in file:line
2013-10-02 15:33:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-02 15:33:54 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$view' (T_VARIABLE) ~ APPPATH/classes/Controller/Blog.php [ 61 ] in file:line
2013-10-02 15:33:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-02 16:14:56 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'kohana.cidades' doesn't exist [ SHOW FULL COLUMNS FROM `cidades` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/adirkuhn/Projetos/cursophp/batata/modules/database/classes/Kohana/Database/MySQL.php:359
2013-10-02 16:14:56 --- DEBUG: #0 /Users/adirkuhn/Projetos/cursophp/batata/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('cidades')
#2 /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /Users/adirkuhn/Projetos/cursophp/batata/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /Users/adirkuhn/Projetos/cursophp/batata/application/classes/Controller/Amora.php(9): Kohana_ORM::factory('Cidade')
#7 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Controller.php(84): Controller_Amora->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Amora))
#10 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/adirkuhn/Projetos/cursophp/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/adirkuhn/Projetos/cursophp/kohana/index.php(118): Kohana_Request->execute()
#13 {main} in /Users/adirkuhn/Projetos/cursophp/batata/modules/database/classes/Kohana/Database/MySQL.php:359
2013-10-02 16:19:18 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/classes/Controller/Amora.php [ 18 ] in file:line
2013-10-02 16:19:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line