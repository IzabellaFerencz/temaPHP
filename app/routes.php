<?php
/**
 * Created by PhpStorm.
 * User: hamze
 * Date: 11/26/2018
 * Time: 10:37 AM
 */
$routes = [
    '/page/about-us' => ['controller' => 'PageController',
        'action' => 'aboutUsAction'],
    '/user/{id}' => ['controller' => 'UserController',
        'action' => 'showAction', 'guard'=> 'Authenticated'],
    '/user/index' =>['controller' => 'UserController',
        'action' => 'index'],
    '/page/movies' => ['controller' => 'PageController',
        'action' => 'viewMovieList'],
    '/page/{id}'=>['controller' => 'PageController',
        'action'=>'viewMovie'],
    '/auth/login' => ['controller' => 'UserController', 'action' => 'login']
];
