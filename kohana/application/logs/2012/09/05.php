<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-09-05 05:45:55 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\kohana\response.php [ 160 ]
2012-09-05 05:45:55 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ SYSPATH\classes\kohana\response.php [ 160 ]
--
#0 E:\xampp\htdocs\kohana\system\classes\kohana\response.php(160): Kohana_Core::error_handler(8, 'Array to string...', 'E:\xampp\htdocs...', 160, Array)
#1 E:\xampp\htdocs\kohana\application\classes\controller\blog.php(9): Kohana_Response->body(Array)
#2 [internal function]: Controller_Blog->action_index()
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Blog))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-05 05:51:16 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Blog::$view ~ APPPATH\classes\controller\blog.php [ 9 ]
2012-09-05 05:51:16 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Blog::$view ~ APPPATH\classes\controller\blog.php [ 9 ]
--
#0 E:\xampp\htdocs\kohana\application\classes\controller\blog.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\xampp\htdocs...', 9, Array)
#1 [internal function]: Controller_Blog->action_index()
#2 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Blog))
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-05 05:53:29 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Blog::$view ~ APPPATH\classes\controller\blog.php [ 9 ]
2012-09-05 05:53:29 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Blog::$view ~ APPPATH\classes\controller\blog.php [ 9 ]
--
#0 E:\xampp\htdocs\kohana\application\classes\controller\blog.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\xampp\htdocs...', 9, Array)
#1 [internal function]: Controller_Blog->action_index()
#2 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Blog))
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-05 05:58:39 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Blog::$view ~ APPPATH\classes\controller\blog.php [ 9 ]
2012-09-05 05:58:39 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Blog::$view ~ APPPATH\classes\controller\blog.php [ 9 ]
--
#0 E:\xampp\htdocs\kohana\application\classes\controller\blog.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\xampp\htdocs...', 9, Array)
#1 [internal function]: Controller_Blog->action_index()
#2 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Blog))
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-05 06:01:52 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Blog::$view ~ APPPATH\classes\controller\blog.php [ 9 ]
2012-09-05 06:01:52 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Blog::$view ~ APPPATH\classes\controller\blog.php [ 9 ]
--
#0 E:\xampp\htdocs\kohana\application\classes\controller\blog.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\xampp\htdocs...', 9, Array)
#1 [internal function]: Controller_Blog->action_index()
#2 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Blog))
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-05 06:02:40 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Blog::$view ~ APPPATH\classes\controller\blog.php [ 9 ]
2012-09-05 06:02:40 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Blog::$view ~ APPPATH\classes\controller\blog.php [ 9 ]
--
#0 E:\xampp\htdocs\kohana\application\classes\controller\blog.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\xampp\htdocs...', 9, Array)
#1 [internal function]: Controller_Blog->action_index()
#2 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Blog))
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-05 06:05:50 --- ERROR: ErrorException [ 1 ]: Call to undefined method Response::set_filename() ~ APPPATH\classes\controller\blog.php [ 9 ]
2012-09-05 06:05:50 --- STRACE: ErrorException [ 1 ]: Call to undefined method Response::set_filename() ~ APPPATH\classes\controller\blog.php [ 9 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-05 06:06:11 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Blog::$view ~ APPPATH\classes\controller\blog.php [ 9 ]
2012-09-05 06:06:11 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Blog::$view ~ APPPATH\classes\controller\blog.php [ 9 ]
--
#0 E:\xampp\htdocs\kohana\application\classes\controller\blog.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\xampp\htdocs...', 9, Array)
#1 [internal function]: Controller_Blog->action_index()
#2 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Blog))
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-05 06:06:45 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Blog::$view ~ APPPATH\classes\controller\blog.php [ 9 ]
2012-09-05 06:06:45 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Blog::$view ~ APPPATH\classes\controller\blog.php [ 9 ]
--
#0 E:\xampp\htdocs\kohana\application\classes\controller\blog.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\xampp\htdocs...', 9, Array)
#1 [internal function]: Controller_Blog->action_index()
#2 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Blog))
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-05 09:08:01 --- ERROR: ErrorException [ 1 ]: Class 'Kostache_Layout' not found ~ APPPATH\classes\view\blog\index.php [ 4 ]
2012-09-05 09:08:01 --- STRACE: ErrorException [ 1 ]: Class 'Kostache_Layout' not found ~ APPPATH\classes\view\blog\index.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-05 09:09:49 --- ERROR: ErrorException [ 1 ]: Class 'Kohana_Layout' not found ~ APPPATH\classes\view\blog\index.php [ 4 ]
2012-09-05 09:09:49 --- STRACE: ErrorException [ 1 ]: Class 'Kohana_Layout' not found ~ APPPATH\classes\view\blog\index.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-05 09:16:31 --- ERROR: ErrorException [ 1 ]: Class 'View_Blog_Index' not found ~ APPPATH\classes\controller\blog.php [ 7 ]
2012-09-05 09:16:31 --- STRACE: ErrorException [ 1 ]: Class 'View_Blog_Index' not found ~ APPPATH\classes\controller\blog.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-05 09:17:13 --- ERROR: ErrorException [ 1 ]: Class 'Kostache_Layout' not found ~ APPPATH\classes\view\blog\index.php [ 4 ]
2012-09-05 09:17:13 --- STRACE: ErrorException [ 1 ]: Class 'Kostache_Layout' not found ~ APPPATH\classes\view\blog\index.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-05 09:19:02 --- ERROR: ErrorException [ 1 ]: Class 'View_Blog_Index' not found ~ APPPATH\classes\controller\blog.php [ 7 ]
2012-09-05 09:19:02 --- STRACE: ErrorException [ 1 ]: Class 'View_Blog_Index' not found ~ APPPATH\classes\controller\blog.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-05 09:20:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\blog.php [ 5 ]
2012-09-05 09:20:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\blog.php [ 5 ]
--
#0 E:\xampp\htdocs\kohana\application\views\blog.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 5, Array)
#1 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\kohana\application\classes\controller\blog.php(8): Kohana_View->render()
#4 [internal function]: Controller_Blog->action_index()
#5 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Blog))
#6 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-05 09:23:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\blog.php [ 8 ]
2012-09-05 09:23:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\blog.php [ 8 ]
--
#0 E:\xampp\htdocs\kohana\application\views\blog.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 8, Array)
#1 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\kohana\application\classes\controller\blog.php(8): Kohana_View->render()
#4 [internal function]: Controller_Blog->action_index()
#5 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Blog))
#6 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#8 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2012-09-05 09:25:47 --- ERROR: View_Exception [ 0 ]: The requested view myview could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-09-05 09:25:47 --- STRACE: View_Exception [ 0 ]: The requested view myview could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(137): Kohana_View->set_filename('myview')
#1 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(30): Kohana_View->__construct('myview', NULL)
#2 E:\xampp\htdocs\kohana\application\classes\controller\blog.php(11): Kohana_View::factory('myview')
#3 [internal function]: Controller_Blog->action_index()
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Blog))
#5 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-05 09:36:35 --- ERROR: View_Exception [ 0 ]: The requested view index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-09-05 09:36:35 --- STRACE: View_Exception [ 0 ]: The requested view index could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(137): Kohana_View->set_filename('index')
#1 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(30): Kohana_View->__construct('index', Array)
#2 E:\xampp\htdocs\kohana\application\classes\controller\blog.php(8): Kohana_View::factory('index', Array)
#3 [internal function]: Controller_Blog->action_index()
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Blog))
#5 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-05 10:05:24 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL blog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
2012-09-05 10:05:24 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL blog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 111 ]
--
#0 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-05 10:13:50 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\welcome.php [ 7 ]
2012-09-05 10:13:50 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\welcome.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-05 10:41:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: table ~ APPPATH\views\index.php [ 14 ]
2012-09-05 10:41:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: table ~ APPPATH\views\index.php [ 14 ]
--
#0 E:\xampp\htdocs\kohana\application\views\index.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 14, Array)
#1 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 E:\xampp\htdocs\kohana\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(7): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_index()
#7 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-05 10:41:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: tables ~ APPPATH\views\index.php [ 14 ]
2012-09-05 10:41:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: tables ~ APPPATH\views\index.php [ 14 ]
--
#0 E:\xampp\htdocs\kohana\application\views\index.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 14, Array)
#1 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 E:\xampp\htdocs\kohana\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(7): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_index()
#7 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-05 10:44:43 --- ERROR: ErrorException [ 8 ]: Undefined variable: tables ~ APPPATH\views\index.php [ 14 ]
2012-09-05 10:44:43 --- STRACE: ErrorException [ 8 ]: Undefined variable: tables ~ APPPATH\views\index.php [ 14 ]
--
#0 E:\xampp\htdocs\kohana\application\views\index.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 14, Array)
#1 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 E:\xampp\htdocs\kohana\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(7): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_index()
#7 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-05 10:45:26 --- ERROR: ErrorException [ 8 ]: Undefined variable: tables ~ APPPATH\views\index.php [ 14 ]
2012-09-05 10:45:26 --- STRACE: ErrorException [ 8 ]: Undefined variable: tables ~ APPPATH\views\index.php [ 14 ]
--
#0 E:\xampp\htdocs\kohana\application\views\index.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 14, Array)
#1 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 E:\xampp\htdocs\kohana\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(7): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_index()
#7 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-05 10:45:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: tables ~ APPPATH\views\index.php [ 14 ]
2012-09-05 10:45:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: tables ~ APPPATH\views\index.php [ 14 ]
--
#0 E:\xampp\htdocs\kohana\application\views\index.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 14, Array)
#1 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 E:\xampp\htdocs\kohana\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(7): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_index()
#7 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-05 10:47:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: tables ~ APPPATH\views\index.php [ 14 ]
2012-09-05 10:47:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: tables ~ APPPATH\views\index.php [ 14 ]
--
#0 E:\xampp\htdocs\kohana\application\views\index.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 14, Array)
#1 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 E:\xampp\htdocs\kohana\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(7): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_index()
#7 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-05 10:48:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: tables ~ APPPATH\views\index.php [ 14 ]
2012-09-05 10:48:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: tables ~ APPPATH\views\index.php [ 14 ]
--
#0 E:\xampp\htdocs\kohana\application\views\index.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 14, Array)
#1 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 E:\xampp\htdocs\kohana\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(7): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_index()
#7 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-05 10:51:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\index.php [ 5 ]
2012-09-05 10:51:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\index.php [ 5 ]
--
#0 E:\xampp\htdocs\kohana\application\views\index.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 5, Array)
#1 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 E:\xampp\htdocs\kohana\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(7): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_index()
#7 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-05 10:52:13 --- ERROR: ErrorException [ 1 ]: Class 'Database_MySQL' not found ~ APPPATH\classes\controller\welcome.php [ 7 ]
2012-09-05 10:52:13 --- STRACE: ErrorException [ 1 ]: Class 'Database_MySQL' not found ~ APPPATH\classes\controller\welcome.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-05 10:54:30 --- ERROR: ErrorException [ 1 ]: Class 'Database_MySQL' not found ~ APPPATH\classes\controller\welcome.php [ 7 ]
2012-09-05 10:54:30 --- STRACE: ErrorException [ 1 ]: Class 'Database_MySQL' not found ~ APPPATH\classes\controller\welcome.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-05 11:02:43 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '$tbl' (T_VARIABLE) ~ APPPATH\classes\controller\welcome.php [ 8 ]
2012-09-05 11:02:43 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '$tbl' (T_VARIABLE) ~ APPPATH\classes\controller\welcome.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-05 11:02:52 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\classes\controller\welcome.php [ 7 ]
2012-09-05 11:02:52 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ APPPATH\classes\controller\welcome.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-05 11:03:02 --- ERROR: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\welcome.php [ 7 ]
2012-09-05 11:03:02 --- STRACE: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\welcome.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-05 11:05:33 --- ERROR: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH\classes\controller\welcome.php [ 7 ]
2012-09-05 11:05:33 --- STRACE: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH\classes\controller\welcome.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-05 11:06:54 --- ERROR: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\welcome.php [ 7 ]
2012-09-05 11:06:54 --- STRACE: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\welcome.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-05 11:08:21 --- ERROR: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\welcome.php [ 7 ]
2012-09-05 11:08:21 --- STRACE: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\welcome.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-05 11:09:56 --- ERROR: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\welcome.php [ 7 ]
2012-09-05 11:09:56 --- STRACE: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\welcome.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-05 11:10:54 --- ERROR: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\welcome.php [ 7 ]
2012-09-05 11:10:54 --- STRACE: ErrorException [ 1 ]: Class 'Database' not found ~ APPPATH\classes\controller\welcome.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-05 11:17:40 --- ERROR: ErrorException [ 2048 ]: Non-static method Kohana_Database_MySQL::list_tables() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\controller\welcome.php [ 9 ]
2012-09-05 11:17:40 --- STRACE: ErrorException [ 2048 ]: Non-static method Kohana_Database_MySQL::list_tables() should not be called statically, assuming $this from incompatible context ~ APPPATH\classes\controller\welcome.php [ 9 ]
--
#0 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(9): Kohana_Core::error_handler(2048, 'Non-static meth...', 'E:\xampp\htdocs...', 9, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-05 11:18:55 --- ERROR: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\index.php [ 15 ]
2012-09-05 11:18:55 --- STRACE: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\index.php [ 15 ]
--
#0 E:\xampp\htdocs\kohana\application\views\index.php(15): Kohana_Core::error_handler(8, 'Array to string...', 'E:\xampp\htdocs...', 15, Array)
#1 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 E:\xampp\htdocs\kohana\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(11): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_index()
#7 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-05 11:28:17 --- ERROR: Database_Exception [ 1146 ]: Table 'test.tags' doesn't exist [ select * from tags ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-05 11:28:17 --- STRACE: Database_Exception [ 1146 ]: Table 'test.tags' doesn't exist [ select * from tags ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(8): Kohana_Database_MySQL->query(1, 'select * from t...', true)
#1 [internal function]: Controller_Welcome->action_index()
#2 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-05 11:28:50 --- ERROR: Database_Exception [ 1146 ]: Table 'test.tags' doesn't exist [ select * from tags ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-05 11:28:50 --- STRACE: Database_Exception [ 1146 ]: Table 'test.tags' doesn't exist [ select * from tags ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(8): Kohana_Database_MySQL->query(1, 'select * from t...')
#1 [internal function]: Controller_Welcome->action_index()
#2 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-05 11:29:09 --- ERROR: Database_Exception [ 1146 ]: Table 'test.tags' doesn't exist [ select * from tags ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-05 11:29:09 --- STRACE: Database_Exception [ 1146 ]: Table 'test.tags' doesn't exist [ select * from tags ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(8): Kohana_Database_MySQL->query(1, 'select * from t...')
#1 [internal function]: Controller_Welcome->action_index()
#2 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-05 11:32:23 --- ERROR: ErrorException [ 8 ]: Undefined variable: tags ~ APPPATH\classes\controller\welcome.php [ 9 ]
2012-09-05 11:32:23 --- STRACE: ErrorException [ 8 ]: Undefined variable: tags ~ APPPATH\classes\controller\welcome.php [ 9 ]
--
#0 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 9, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-05 11:33:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: tags ~ APPPATH\classes\controller\welcome.php [ 9 ]
2012-09-05 11:33:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: tags ~ APPPATH\classes\controller\welcome.php [ 9 ]
--
#0 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 9, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-05 11:34:22 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be of the type array, string given, called in E:\xampp\htdocs\kohana\application\classes\controller\welcome.php on line 10 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
2012-09-05 11:34:22 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be of the type array, string given, called in E:\xampp\htdocs\kohana\application\classes\controller\welcome.php on line 10 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
--
#0 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'E:\xampp\htdocs...', 28, Array)
#1 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(10): Kohana_View::factory('index', 'tags')
#2 [internal function]: Controller_Welcome->action_index()
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-05 11:38:50 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be of the type array, object given, called in E:\xampp\htdocs\kohana\application\classes\controller\welcome.php on line 10 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
2012-09-05 11:38:50 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be of the type array, object given, called in E:\xampp\htdocs\kohana\application\classes\controller\welcome.php on line 10 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
--
#0 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'E:\xampp\htdocs...', 28, Array)
#1 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(10): Kohana_View::factory('index', Object(Database_MySQL_Result))
#2 [internal function]: Controller_Welcome->action_index()
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-05 11:43:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: dt ~ APPPATH\classes\controller\welcome.php [ 10 ]
2012-09-05 11:43:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: dt ~ APPPATH\classes\controller\welcome.php [ 10 ]
--
#0 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 10, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-05 11:43:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: dt ~ APPPATH\views\index.php [ 14 ]
2012-09-05 11:43:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: dt ~ APPPATH\views\index.php [ 14 ]
--
#0 E:\xampp\htdocs\kohana\application\views\index.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 14, Array)
#1 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 E:\xampp\htdocs\kohana\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(10): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_index()
#7 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-05 11:44:42 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\index.php [ 14 ]
2012-09-05 11:44:42 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\index.php [ 14 ]
--
#0 E:\xampp\htdocs\kohana\application\views\index.php(14): Kohana_Core::error_handler(4096, 'Object of class...', 'E:\xampp\htdocs...', 14, Array)
#1 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 E:\xampp\htdocs\kohana\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(10): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_index()
#7 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-05 11:45:03 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\index.php [ 14 ]
2012-09-05 11:45:03 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\index.php [ 14 ]
--
#0 E:\xampp\htdocs\kohana\application\views\index.php(14): Kohana_Core::error_handler(4096, 'Object of class...', 'E:\xampp\htdocs...', 14, Array)
#1 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 E:\xampp\htdocs\kohana\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(10): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_index()
#7 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-05 11:49:34 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database::SELECT() ~ APPPATH\classes\controller\welcome.php [ 8 ]
2012-09-05 11:49:34 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database::SELECT() ~ APPPATH\classes\controller\welcome.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-05 11:51:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\welcome.php [ 10 ]
2012-09-05 11:51:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\welcome.php [ 10 ]
--
#0 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 10, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-05 11:54:44 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be of the type array, object given, called in E:\xampp\htdocs\kohana\application\classes\controller\welcome.php on line 11 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
2012-09-05 11:54:44 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be of the type array, object given, called in E:\xampp\htdocs\kohana\application\classes\controller\welcome.php on line 11 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
--
#0 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'E:\xampp\htdocs...', 28, Array)
#1 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(11): Kohana_View::factory('index', Object(Database_MySQL_Result))
#2 [internal function]: Controller_Welcome->action_index()
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-05 11:59:33 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be of the type array, object given, called in E:\xampp\htdocs\kohana\application\classes\controller\welcome.php on line 11 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
2012-09-05 11:59:33 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be of the type array, object given, called in E:\xampp\htdocs\kohana\application\classes\controller\welcome.php on line 11 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
--
#0 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'E:\xampp\htdocs...', 28, Array)
#1 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(11): Kohana_View::factory('index', Object(Database_MySQL_Result))
#2 [internal function]: Controller_Welcome->action_index()
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-05 12:03:19 --- ERROR: ErrorException [ 8 ]: Undefined variable: tags ~ APPPATH\classes\controller\welcome.php [ 15 ]
2012-09-05 12:03:19 --- STRACE: ErrorException [ 8 ]: Undefined variable: tags ~ APPPATH\classes\controller\welcome.php [ 15 ]
--
#0 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 15, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-05 12:03:36 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be of the type array, object given, called in E:\xampp\htdocs\kohana\application\classes\controller\welcome.php on line 15 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
2012-09-05 12:03:36 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be of the type array, object given, called in E:\xampp\htdocs\kohana\application\classes\controller\welcome.php on line 15 and defined ~ SYSPATH\classes\kohana\view.php [ 28 ]
--
#0 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'E:\xampp\htdocs...', 28, Array)
#1 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(15): Kohana_View::factory('index', Object(Database_MySQL_Result))
#2 [internal function]: Controller_Welcome->action_index()
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-05 12:04:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\welcome.php [ 12 ]
2012-09-05 12:04:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\welcome.php [ 12 ]
--
#0 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 12, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-05 12:05:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\index.php [ 15 ]
2012-09-05 12:05:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\index.php [ 15 ]
--
#0 E:\xampp\htdocs\kohana\application\views\index.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 15, Array)
#1 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 E:\xampp\htdocs\kohana\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(13): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_index()
#7 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-05 12:06:30 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\index.php [ 15 ]
2012-09-05 12:06:30 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\index.php [ 15 ]
--
#0 E:\xampp\htdocs\kohana\application\views\index.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 15, Array)
#1 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 E:\xampp\htdocs\kohana\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(13): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_index()
#7 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-05 12:06:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\index.php [ 15 ]
2012-09-05 12:06:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\index.php [ 15 ]
--
#0 E:\xampp\htdocs\kohana\application\views\index.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 15, Array)
#1 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 E:\xampp\htdocs\kohana\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(13): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_index()
#7 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-05 12:07:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\index.php [ 15 ]
2012-09-05 12:07:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\index.php [ 15 ]
--
#0 E:\xampp\htdocs\kohana\application\views\index.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 15, Array)
#1 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 E:\xampp\htdocs\kohana\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(13): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_index()
#7 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-05 12:12:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\index.php [ 15 ]
2012-09-05 12:12:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\index.php [ 15 ]
--
#0 E:\xampp\htdocs\kohana\application\views\index.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 15, Array)
#1 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 E:\xampp\htdocs\kohana\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(14): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_index()
#7 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-05 12:12:32 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\classes\controller\welcome.php [ 12 ]
2012-09-05 12:12:32 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\classes\controller\welcome.php [ 12 ]
--
#0 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(12): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\xampp\htdocs...', 12, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-05 18:23:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: rec ~ APPPATH\classes\controller\welcome.php [ 14 ]
2012-09-05 18:23:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: rec ~ APPPATH\classes\controller\welcome.php [ 14 ]
--
#0 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 14, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-05 18:28:54 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\index.php [ 17 ]
2012-09-05 18:28:54 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\index.php [ 17 ]
--
#0 E:\xampp\htdocs\kohana\application\views\index.php(17): Kohana_Core::error_handler(2, 'Invalid argumen...', 'E:\xampp\htdocs...', 17, Array)
#1 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 E:\xampp\htdocs\kohana\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(14): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_index()
#7 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-05 19:16:30 --- ERROR: ErrorException [ 8 ]: Undefined index: tagname ~ APPPATH\views\index.php [ 32 ]
2012-09-05 19:16:30 --- STRACE: ErrorException [ 8 ]: Undefined index: tagname ~ APPPATH\views\index.php [ 32 ]
--
#0 E:\xampp\htdocs\kohana\application\views\index.php(32): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\xampp\htdocs...', 32, Array)
#1 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 E:\xampp\htdocs\kohana\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(14): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_index()
#7 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}