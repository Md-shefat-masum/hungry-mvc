<?php
include_once('./routes/Route.php');

$app = new Route();
$app->get('/','WebsiteController@home');
$app->get('/about','WebsiteController@about');
$app->get('/gallery','WebsiteController@gallery');
$app->get('/blog','WebsiteController@blog');

$app->get('/contact','WebsiteController@contact');
$app->post('/contact/submit','ContactController@contact_submit');

$app->get('/login','WebsiteController@login');
$app->post('/login/submit','WebsiteController@login_submit');

$app->start();