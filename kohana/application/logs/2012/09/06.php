<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-09-06 00:47:23 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 't.id) as tags_cnt from tags t' at line 1 [ select *, (select count(*) from photo_tags pt where pt.tags_id in t.id) as tags_cnt from tags t ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-06 00:47:23 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 't.id) as tags_cnt from tags t' at line 1 [ select *, (select count(*) from photo_tags pt where pt.tags_id in t.id) as tags_cnt from tags t ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(8): Kohana_Database_MySQL->query(1, 'select *, (sele...', true)
#1 [internal function]: Controller_Welcome->action_index()
#2 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-06 00:47:58 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'pt.tags_id) as tags_cnt from tags t' at line 1 [ select *, (select count(*) from photo_tags pt where t.id in pt.tags_id) as tags_cnt from tags t ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-06 00:47:58 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'pt.tags_id) as tags_cnt from tags t' at line 1 [ select *, (select count(*) from photo_tags pt where t.id in pt.tags_id) as tags_cnt from tags t ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(8): Kohana_Database_MySQL->query(1, 'select *, (sele...', true)
#1 [internal function]: Controller_Welcome->action_index()
#2 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-06 00:48:46 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '*) from photo_tags pt where t.id in pt.tags_id) as tags_cnt from tags t' at line 1 [ select *, (select count(t.*) from photo_tags pt where t.id in pt.tags_id) as tags_cnt from tags t ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-06 00:48:46 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '*) from photo_tags pt where t.id in pt.tags_id) as tags_cnt from tags t' at line 1 [ select *, (select count(t.*) from photo_tags pt where t.id in pt.tags_id) as tags_cnt from tags t ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(8): Kohana_Database_MySQL->query(1, 'select *, (sele...', true)
#1 [internal function]: Controller_Welcome->action_index()
#2 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-06 00:50:38 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '*) from photo_tags pt where t.id in (pt.tags_id)) as tags_cnt from tags t' at line 1 [ select *, (select count(t.*) from photo_tags pt where t.id in (pt.tags_id)) as tags_cnt from tags t ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-06 00:50:38 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '*) from photo_tags pt where t.id in (pt.tags_id)) as tags_cnt from tags t' at line 1 [ select *, (select count(t.*) from photo_tags pt where t.id in (pt.tags_id)) as tags_cnt from tags t ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(8): Kohana_Database_MySQL->query(1, 'select *, (sele...', true)
#1 [internal function]: Controller_Welcome->action_index()
#2 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-06 01:54:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: tags ~ APPPATH\views\index.php [ 43 ]
2012-09-06 01:54:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: tags ~ APPPATH\views\index.php [ 43 ]
--
#0 E:\xampp\htdocs\kohana\application\views\index.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 43, Array)
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
2012-09-06 01:55:20 --- ERROR: ErrorException [ 8 ]: Undefined variable: tags ~ APPPATH\views\index.php [ 43 ]
2012-09-06 01:55:20 --- STRACE: ErrorException [ 8 ]: Undefined variable: tags ~ APPPATH\views\index.php [ 43 ]
--
#0 E:\xampp\htdocs\kohana\application\views\index.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 43, Array)
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
2012-09-06 01:56:05 --- ERROR: ErrorException [ 8 ]: Undefined variable: tags ~ APPPATH\views\index.php [ 43 ]
2012-09-06 01:56:05 --- STRACE: ErrorException [ 8 ]: Undefined variable: tags ~ APPPATH\views\index.php [ 43 ]
--
#0 E:\xampp\htdocs\kohana\application\views\index.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 43, Array)
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
2012-09-06 01:56:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\welcome.php [ 13 ]
2012-09-06 01:56:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\welcome.php [ 13 ]
--
#0 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 13, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-06 01:57:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\welcome.php [ 13 ]
2012-09-06 01:57:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\controller\welcome.php [ 13 ]
--
#0 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 13, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-06 01:57:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: tags ~ APPPATH\views\index.php [ 43 ]
2012-09-06 01:57:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: tags ~ APPPATH\views\index.php [ 43 ]
--
#0 E:\xampp\htdocs\kohana\application\views\index.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 43, Array)
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
2012-09-06 01:58:37 --- ERROR: ErrorException [ 8 ]: Undefined variable: tag ~ APPPATH\classes\controller\welcome.php [ 20 ]
2012-09-06 01:58:37 --- STRACE: ErrorException [ 8 ]: Undefined variable: tag ~ APPPATH\classes\controller\welcome.php [ 20 ]
--
#0 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 20, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-06 02:36:56 --- ERROR: ErrorException [ 8 ]: Undefined property: Request::$method ~ APPPATH\classes\controller\welcome.php [ 7 ]
2012-09-06 02:36:56 --- STRACE: ErrorException [ 8 ]: Undefined property: Request::$method ~ APPPATH\classes\controller\welcome.php [ 7 ]
--
#0 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(7): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\xampp\htdocs...', 7, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-06 02:37:25 --- ERROR: ErrorException [ 8 ]: Undefined property: Response::$method ~ APPPATH\classes\controller\welcome.php [ 7 ]
2012-09-06 02:37:25 --- STRACE: ErrorException [ 8 ]: Undefined property: Response::$method ~ APPPATH\classes\controller\welcome.php [ 7 ]
--
#0 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(7): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\xampp\htdocs...', 7, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-06 02:40:58 --- ERROR: ErrorException [ 8 ]: Undefined index: temp_name ~ APPPATH\classes\controller\welcome.php [ 8 ]
2012-09-06 02:40:58 --- STRACE: ErrorException [ 8 ]: Undefined index: temp_name ~ APPPATH\classes\controller\welcome.php [ 8 ]
--
#0 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(8): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\xampp\htdocs...', 8, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-06 02:42:00 --- ERROR: ErrorException [ 8 ]: Undefined index: file ~ APPPATH\classes\controller\welcome.php [ 8 ]
2012-09-06 02:42:00 --- STRACE: ErrorException [ 8 ]: Undefined index: file ~ APPPATH\classes\controller\welcome.php [ 8 ]
--
#0 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(8): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\xampp\htdocs...', 8, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-06 02:43:00 --- ERROR: ErrorException [ 8 ]: Undefined index: file ~ APPPATH\classes\controller\welcome.php [ 8 ]
2012-09-06 02:43:00 --- STRACE: ErrorException [ 8 ]: Undefined index: file ~ APPPATH\classes\controller\welcome.php [ 8 ]
--
#0 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(8): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\xampp\htdocs...', 8, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-06 02:43:19 --- ERROR: ErrorException [ 8 ]: Undefined index: file ~ APPPATH\classes\controller\welcome.php [ 8 ]
2012-09-06 02:43:19 --- STRACE: ErrorException [ 8 ]: Undefined index: file ~ APPPATH\classes\controller\welcome.php [ 8 ]
--
#0 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(8): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\xampp\htdocs...', 8, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-06 02:43:39 --- ERROR: ErrorException [ 8 ]: Undefined index: file ~ APPPATH\classes\controller\welcome.php [ 8 ]
2012-09-06 02:43:39 --- STRACE: ErrorException [ 8 ]: Undefined index: file ~ APPPATH\classes\controller\welcome.php [ 8 ]
--
#0 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(8): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\xampp\htdocs...', 8, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-06 02:46:49 --- ERROR: ErrorException [ 8 ]: Undefined index:  ~ APPPATH\classes\controller\welcome.php [ 8 ]
2012-09-06 02:46:49 --- STRACE: ErrorException [ 8 ]: Undefined index:  ~ APPPATH\classes\controller\welcome.php [ 8 ]
--
#0 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(8): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\xampp\htdocs...', 8, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-06 02:48:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH\classes\controller\welcome.php [ 8 ]
2012-09-06 02:48:36 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH\classes\controller\welcome.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-06 02:48:45 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH\classes\controller\welcome.php [ 8 ]
2012-09-06 02:48:45 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ',' or ';' ~ APPPATH\classes\controller\welcome.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-06 03:04:49 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Welcome::$load ~ APPPATH\classes\controller\welcome.php [ 8 ]
2012-09-06 03:04:49 --- STRACE: ErrorException [ 8 ]: Undefined property: Controller_Welcome::$load ~ APPPATH\classes\controller\welcome.php [ 8 ]
--
#0 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(8): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\xampp\htdocs...', 8, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-06 03:05:12 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Welcome::model() ~ APPPATH\classes\controller\welcome.php [ 8 ]
2012-09-06 03:05:12 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Welcome::model() ~ APPPATH\classes\controller\welcome.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-06 03:11:37 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\controller\welcome.php [ 11 ]
2012-09-06 03:11:37 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\controller\welcome.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-06 03:12:04 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\controller\welcome.php [ 11 ]
2012-09-06 03:12:04 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\classes\controller\welcome.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-06 03:24:55 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_DB::insert() must be of the type array, string given, called in E:\xampp\htdocs\kohana\application\classes\model\welcome.php on line 14 and defined ~ MODPATH\database\classes\kohana\db.php [ 89 ]
2012-09-06 03:24:55 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_DB::insert() must be of the type array, string given, called in E:\xampp\htdocs\kohana\application\classes\model\welcome.php on line 14 and defined ~ MODPATH\database\classes\kohana\db.php [ 89 ]
--
#0 E:\xampp\htdocs\kohana\modules\database\classes\kohana\db.php(89): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'E:\xampp\htdocs...', 89, Array)
#1 E:\xampp\htdocs\kohana\application\classes\model\welcome.php(14): Kohana_DB::insert(2, 'INSERT INTO pho...')
#2 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(11): Model_Welcome->Add(Array)
#3 [internal function]: Controller_Welcome->action_index()
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-06 03:29:41 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `photo_tags` (`photo_name`, `tags_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-06 03:29:41 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `photo_tags` (`photo_name`, `tags_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 E:\xampp\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ph...', false, Array)
#1 E:\xampp\htdocs\kohana\application\classes\model\welcome.php(18): Kohana_Database_Query->execute()
#2 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(11): Model_Welcome->Add(Array)
#3 [internal function]: Controller_Welcome->action_index()
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-06 03:31:34 --- ERROR: ErrorException [ 4096 ]: Argument 2 passed to Kohana_DB::insert() must be of the type array, string given, called in E:\xampp\htdocs\kohana\application\classes\model\welcome.php on line 14 and defined ~ MODPATH\database\classes\kohana\db.php [ 89 ]
2012-09-06 03:31:34 --- STRACE: ErrorException [ 4096 ]: Argument 2 passed to Kohana_DB::insert() must be of the type array, string given, called in E:\xampp\htdocs\kohana\application\classes\model\welcome.php on line 14 and defined ~ MODPATH\database\classes\kohana\db.php [ 89 ]
--
#0 E:\xampp\htdocs\kohana\modules\database\classes\kohana\db.php(89): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'E:\xampp\htdocs...', 89, Array)
#1 E:\xampp\htdocs\kohana\application\classes\model\welcome.php(14): Kohana_DB::insert(2, 'INSERT INTO pho...')
#2 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(11): Model_Welcome->Add(Array)
#3 [internal function]: Controller_Welcome->action_index()
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-06 03:33:16 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `photo_tags` (`photo_name`, `tags_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-06 03:33:16 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `photo_tags` (`photo_name`, `tags_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 E:\xampp\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ph...', false, Array)
#1 E:\xampp\htdocs\kohana\application\classes\model\welcome.php(18): Kohana_Database_Query->execute()
#2 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(11): Model_Welcome->Add(Array)
#3 [internal function]: Controller_Welcome->action_index()
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-06 03:34:11 --- ERROR: ErrorException [ 8 ]: Undefined index: tags_id ~ APPPATH\classes\model\welcome.php [ 14 ]
2012-09-06 03:34:11 --- STRACE: ErrorException [ 8 ]: Undefined index: tags_id ~ APPPATH\classes\model\welcome.php [ 14 ]
--
#0 E:\xampp\htdocs\kohana\application\classes\model\welcome.php(14): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\xampp\htdocs...', 14, Array)
#1 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(11): Model_Welcome->Add(Array)
#2 [internal function]: Controller_Welcome->action_index()
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-06 03:35:33 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `photo_tags` (`DSC_1679`.`JPG`.`image/jpeg`, `1,2`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-06 03:35:33 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `photo_tags` (`DSC_1679`.`JPG`.`image/jpeg`, `1,2`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 E:\xampp\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ph...', false, Array)
#1 E:\xampp\htdocs\kohana\application\classes\model\welcome.php(18): Kohana_Database_Query->execute()
#2 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(11): Model_Welcome->Add(Array)
#3 [internal function]: Controller_Welcome->action_index()
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-06 03:36:38 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `photo_tags` (`photo_name`, `tags_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-06 03:36:38 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `photo_tags` (`photo_name`, `tags_id`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 E:\xampp\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ph...', false, Array)
#1 E:\xampp\htdocs\kohana\application\classes\model\welcome.php(18): Kohana_Database_Query->execute()
#2 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(11): Model_Welcome->Add(Array)
#3 [internal function]: Controller_Welcome->action_index()
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-06 03:37:41 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `photo_tags` (`DSC_1679`.`JPG`.`image/jpeg`, `1,2`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-06 03:37:41 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 [ INSERT INTO `photo_tags` (`DSC_1679`.`JPG`.`image/jpeg`, `1,2`) VALUES  ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 E:\xampp\htdocs\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ph...', false, Array)
#1 E:\xampp\htdocs\kohana\application\classes\model\welcome.php(18): Kohana_Database_Query->execute()
#2 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(11): Model_Welcome->Add(Array)
#3 [internal function]: Controller_Welcome->action_index()
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#7 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-09-06 03:37:57 --- ERROR: ErrorException [ 8 ]: Undefined index: tags ~ APPPATH\classes\model\welcome.php [ 14 ]
2012-09-06 03:37:57 --- STRACE: ErrorException [ 8 ]: Undefined index: tags ~ APPPATH\classes\model\welcome.php [ 14 ]
--
#0 E:\xampp\htdocs\kohana\application\classes\model\welcome.php(14): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\xampp\htdocs...', 14, Array)
#1 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(11): Model_Welcome->Add(Array)
#2 [internal function]: Controller_Welcome->action_index()
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-06 03:42:41 --- ERROR: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\index.php [ 28 ]
2012-09-06 03:42:41 --- STRACE: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\index.php [ 28 ]
--
#0 E:\xampp\htdocs\kohana\application\views\index.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 28, Array)
#1 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 E:\xampp\htdocs\kohana\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(28): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_index()
#7 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-06 03:49:52 --- ERROR: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH\classes\controller\welcome.php [ 9 ]
2012-09-06 03:49:52 --- STRACE: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH\classes\controller\welcome.php [ 9 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', 'E:\xampp\htdocs...', 9, Array)
#1 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(9): implode(',', NULL)
#2 [internal function]: Controller_Welcome->action_index()
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-06 03:51:03 --- ERROR: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH\classes\controller\welcome.php [ 9 ]
2012-09-06 03:51:03 --- STRACE: ErrorException [ 2 ]: implode(): Invalid arguments passed ~ APPPATH\classes\controller\welcome.php [ 9 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Inva...', 'E:\xampp\htdocs...', 9, Array)
#1 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(9): implode(',', NULL)
#2 [internal function]: Controller_Welcome->action_index()
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#6 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2012-09-06 03:51:43 --- ERROR: ErrorException [ 8 ]: Undefined index: photoname ~ APPPATH\classes\controller\welcome.php [ 11 ]
2012-09-06 03:51:43 --- STRACE: ErrorException [ 8 ]: Undefined index: photoname ~ APPPATH\classes\controller\welcome.php [ 11 ]
--
#0 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(11): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\xampp\htdocs...', 11, Array)
#1 [internal function]: Controller_Welcome->action_index()
#2 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-06 04:01:41 --- ERROR: ErrorException [ 1 ]: Call to undefined function print_f() ~ APPPATH\views\index.php [ 34 ]
2012-09-06 04:01:41 --- STRACE: ErrorException [ 1 ]: Call to undefined function print_f() ~ APPPATH\views\index.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-06 04:12:33 --- ERROR: ErrorException [ 1 ]: Call to a member function method() on a non-object ~ APPPATH\classes\controller\welcome.php [ 14 ]
2012-09-06 04:12:33 --- STRACE: ErrorException [ 1 ]: Call to a member function method() on a non-object ~ APPPATH\classes\controller\welcome.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-06 04:17:55 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH\classes\controller\welcome.php [ 12 ]
2012-09-06 04:17:55 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH\classes\controller\welcome.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-06 04:20:10 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH\classes\controller\welcome.php [ 11 ]
2012-09-06 04:20:10 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH\classes\controller\welcome.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-06 04:20:42 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE), expecting function (T_FUNCTION) ~ APPPATH\classes\controller\welcome.php [ 15 ]
2012-09-06 04:20:42 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE), expecting function (T_FUNCTION) ~ APPPATH\classes\controller\welcome.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-06 04:24:07 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH\classes\controller\welcome.php [ 11 ]
2012-09-06 04:24:07 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH\classes\controller\welcome.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-06 04:24:38 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH\classes\controller\welcome.php [ 12 ]
2012-09-06 04:24:38 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH\classes\controller\welcome.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-06 04:28:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\index.php [ 33 ]
2012-09-06 04:28:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\index.php [ 33 ]
--
#0 E:\xampp\htdocs\kohana\application\views\index.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 33, Array)
#1 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 E:\xampp\htdocs\kohana\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(41): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_index()
#7 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-06 04:30:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\index.php [ 33 ]
2012-09-06 04:30:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\index.php [ 33 ]
--
#0 E:\xampp\htdocs\kohana\application\views\index.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 33, Array)
#1 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 E:\xampp\htdocs\kohana\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(41): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_index()
#7 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-06 04:37:57 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tags_id' in 'where clause' [ select tagname from tags where tags_id=2 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-06 04:37:57 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tags_id' in 'where clause' [ select tagname from tags where tags_id=2 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(14): Kohana_Database_MySQL->query(1, 'select tagname ...', true)
#1 [internal function]: Controller_Welcome->action_index()
#2 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-06 04:38:20 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tags_id' in 'where clause' [ select tagname from tags where tags_id=2 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-06 04:38:20 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tags_id' in 'where clause' [ select tagname from tags where tags_id=2 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(14): Kohana_Database_MySQL->query(1, 'select tagname ...', true)
#1 [internal function]: Controller_Welcome->action_index()
#2 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-06 04:38:34 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tags_id' in 'where clause' [ select tagname from tags where tags_id=2 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-06 04:38:34 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tags_id' in 'where clause' [ select tagname from tags where tags_id=2 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(14): Kohana_Database_MySQL->query(1, 'select tagname ...', true)
#1 [internal function]: Controller_Welcome->action_index()
#2 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-06 04:39:03 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tags_id' in 'where clause' [ select tagname from tags where tags_id=2 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-06 04:39:03 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tags_id' in 'where clause' [ select tagname from tags where tags_id=2 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(14): Kohana_Database_MySQL->query(1, 'select tagname ...', true)
#1 [internal function]: Controller_Welcome->action_index()
#2 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-06 04:39:21 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'tags_id' in 'where clause' [ select tagname from tags where tags_id=2 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-09-06 04:39:21 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'tags_id' in 'where clause' [ select tagname from tags where tags_id=2 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(14): Kohana_Database_MySQL->query(1, 'select tagname ...', true)
#1 [internal function]: Controller_Welcome->action_index()
#2 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#5 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-09-06 04:45:10 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '/' ~ APPPATH\views\index.php [ 81 ]
2012-09-06 04:45:10 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '/' ~ APPPATH\views\index.php [ 81 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-06 04:45:59 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '/' ~ APPPATH\views\index.php [ 81 ]
2012-09-06 04:45:59 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '/' ~ APPPATH\views\index.php [ 81 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-09-06 04:59:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\index.php [ 37 ]
2012-09-06 04:59:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\index.php [ 37 ]
--
#0 E:\xampp\htdocs\kohana\application\views\index.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 37, Array)
#1 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 E:\xampp\htdocs\kohana\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(48): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_index()
#7 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-06 05:01:10 --- ERROR: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\index.php [ 37 ]
2012-09-06 05:01:10 --- STRACE: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\index.php [ 37 ]
--
#0 E:\xampp\htdocs\kohana\application\views\index.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 37, Array)
#1 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 E:\xampp\htdocs\kohana\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(48): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_index()
#7 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-06 05:01:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\index.php [ 37 ]
2012-09-06 05:01:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\index.php [ 37 ]
--
#0 E:\xampp\htdocs\kohana\application\views\index.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 37, Array)
#1 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 E:\xampp\htdocs\kohana\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(49): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_index()
#7 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-06 05:02:07 --- ERROR: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\index.php [ 37 ]
2012-09-06 05:02:07 --- STRACE: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\index.php [ 37 ]
--
#0 E:\xampp\htdocs\kohana\application\views\index.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 37, Array)
#1 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 E:\xampp\htdocs\kohana\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(49): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_index()
#7 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-06 05:02:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\index.php [ 37 ]
2012-09-06 05:02:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\index.php [ 37 ]
--
#0 E:\xampp\htdocs\kohana\application\views\index.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 37, Array)
#1 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 E:\xampp\htdocs\kohana\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(49): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_index()
#7 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-06 05:02:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\index.php [ 37 ]
2012-09-06 05:02:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\views\index.php [ 37 ]
--
#0 E:\xampp\htdocs\kohana\application\views\index.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 37, Array)
#1 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 E:\xampp\htdocs\kohana\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(49): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_index()
#7 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}
2012-09-06 05:05:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: photoname ~ APPPATH\views\index.php [ 81 ]
2012-09-06 05:05:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: photoname ~ APPPATH\views\index.php [ 81 ]
--
#0 E:\xampp\htdocs\kohana\application\views\index.php(81): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\xampp\htdocs...', 81, Array)
#1 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(61): include('E:\xampp\htdocs...')
#2 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('E:\xampp\htdocs...', Array)
#3 E:\xampp\htdocs\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 E:\xampp\htdocs\kohana\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 E:\xampp\htdocs\kohana\application\classes\controller\welcome.php(47): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Welcome->action_index()
#7 E:\xampp\htdocs\kohana\system\classes\kohana\request\client\internal.php(116): ReflectionMethod->invoke(Object(Controller_Welcome))
#8 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#10 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#11 {main}