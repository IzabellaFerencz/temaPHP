<?php
/**
 * Created by PhpStorm.
 * User: hamze
 * Date: 11/12/2018
 * Time: 10:39 AM
 */
require_once "../app/Config.php";
require_once "../app/routes.php";
require __DIR__.'/../vendor/autoload.php';

use \Framework\Router;

ini_set("display_errors", 0);
ini_set("error_log", __DIR__."/../logs/error.log");
error_reporting(0);

if(\App\Config::ENV=="dev"){
    ini_set("display_errors", 1);
    error_reporting(E_ALL);
    Tracy\Debugger::enable(Tracy\Debugger::DEVELOPMENT);
}
else
{
    Tracy\Debugger::enable(Tracy\Debugger::PRODUCTION);
}


$requestUri=$_SERVER['REQUEST_URI'];
$queryString= $_SERVER['QUERY_STRING'];

//Pentu Request_URI
$router=new Router($routes,$requestUri,$queryString);
$router->checkRoute();