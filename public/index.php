<?php
require_once __DIR__ . '/../vendor/autoload.php';

$router = $_GET['r'];
list($controllerName, $actionName) = explode('/', $router);//字符串分割成数组  http://localhost:63342/simple-framework-0.1/public/index.php?r=site/test
$ucController = ucfirst($controllerName);//首字符转换为大写Site
$controllerName = 'app\\controllers\\' . $ucController . 'Controller'; //app/controllers/SiteController
$controller = new $controllerName();
return call_user_func([$controller, 'action'. ucfirst($actionName)]);//调用SiteController下的actionTest方法
//return call_user_func([$controller, 'actionView']);//调用SiteController下的actionTest方法
