<?php
/**
 * Created by PhpStorm.
 * User: hamze
 * Date: 11/26/2018
 * Time: 10:37 AM
 */
$routes = [
    '/home' => ['controller' => 'PageController',
        'action' => 'homeAction'],
    '/movies/add' => ['controller' => 'PageController',
        'action' => 'addActionForm', 'guard'=>'Authenticated'],
    '/user/{id}' => ['controller' => 'UserController',
        'action' => 'showAction', 'guard'=> 'Authenticated'],
    '/user/index' =>['controller' => 'UserController',
        'action' => 'index'],
    '/movies' => ['controller' => 'PageController',
        'action' => 'viewMovieList'],
    '/movies/{id}'=>['controller' => 'PageController',
        'action'=>'viewMovie'],
    '/movies/rating/{id}'=>['controller' => 'PageController',
        'action'=>'rateMovie'],
    '/auth/login' => ['controller' => 'UserController',
        'action' => 'login'],
    '/auth/register' => ['controller' => 'UserController',
        'action' => 'register'],
    '/movies/addMovie' => ['controller' => 'PageController',
        'action' => 'addMovie', 'guard'=>'Authenticated'],
    '/user/login' =>['controller' => 'UserController',
        'action' => 'loginUser']
];
