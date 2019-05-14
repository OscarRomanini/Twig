<?php

require "../bootstrap.php";


$app->get('/', 'app\controllers\HomeController:index');

$app->group('/admin', function() use($app){
    $app->get('/login', function(){
        echo 'login';
    });
});

$app->get('/user/update/{id}', 'app\controllers\UserController:update');

$app->get('/contact', '\app\controllers\ContactController:show');


$app->run();