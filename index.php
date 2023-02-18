<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

Router::get('', 'DefaultController');
Router::get('profile', 'DefaultController');
Router::get('project', 'ProjectController');
Router::get('pattern', 'PatternController');
Router::get('projects', 'ProjectController');
Router::get('patterns', 'PatternController');
Router::post('login', 'SecurityController');
Router::post('addProject', 'ProjectController');
Router::get('addProject', 'ProjectController');
Router::post('register', 'SecurityController');
Router::post('search', 'ProjectController');

Router::run($path);