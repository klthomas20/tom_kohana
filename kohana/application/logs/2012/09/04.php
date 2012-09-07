<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2012-09-04 22:31:18 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\kohana\cookie.php [ 152 ]
2012-09-04 22:31:18 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\kohana\cookie.php [ 152 ]
--
#0 E:\xampp\htdocs\kohana\system\classes\kohana\cookie.php(67): Kohana_Cookie::salt('SESSbaa8f674066...', NULL)
#1 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(202): Kohana_Cookie::get('SESSbaa8f674066...')
#2 E:\xampp\htdocs\kohana\index.php(108): Kohana_Request::factory()
#3 {main}
2012-09-04 22:35:26 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\kohana\cookie.php [ 152 ]
2012-09-04 22:35:26 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\kohana\cookie.php [ 152 ]
--
#0 E:\xampp\htdocs\kohana\system\classes\kohana\cookie.php(67): Kohana_Cookie::salt('SESSbaa8f674066...', NULL)
#1 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(202): Kohana_Cookie::get('SESSbaa8f674066...')
#2 E:\xampp\htdocs\kohana\index.php(108): Kohana_Request::factory()
#3 {main}
2012-09-04 22:40:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-09-04 22:40:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-04 22:41:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-09-04 22:41:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-04 22:41:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-09-04 22:41:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-04 22:42:18 --- ERROR: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\kohana\cookie.php [ 152 ]
2012-09-04 22:42:18 --- STRACE: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\kohana\cookie.php [ 152 ]
--
#0 E:\xampp\htdocs\kohana\system\classes\kohana\cookie.php(67): Kohana_Cookie::salt('SESSbaa8f674066...', NULL)
#1 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(202): Kohana_Cookie::get('SESSbaa8f674066...')
#2 E:\xampp\htdocs\kohana\index.php(108): Kohana_Request::factory()
#3 {main}
2012-09-04 22:43:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-09-04 22:43:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-04 22:52:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL blog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-09-04 22:52:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL blog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-09-04 22:56:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL blog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-09-04 22:56:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL blog was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 E:\xampp\htdocs\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 E:\xampp\htdocs\kohana\system\classes\kohana\request.php(1154): Kohana_Request_Client->execute(Object(Request))
#2 E:\xampp\htdocs\kohana\index.php(109): Kohana_Request->execute()
#3 {main}