<?php

use App\Abstracts\Session;
use Doctrine\Inflector\InflectorFactory;

function view($file_name, $arr = [])
{
    if (is_array($arr) && count($arr)) {
        extract($arr);
    }
    include_once($_SERVER['DOCUMENT_ROOT'] . "/resource/views/$file_name.php");
}

function assets($file_name)
{
    $url = strtolower(explode('/', $_SERVER['SERVER_PROTOCOL'])[0]) . '://';
    $url .= $_SERVER['HTTP_HOST'];
    return $url . "/public/$file_name";
}

function request()
{
    return (object) $_REQUEST;
}

function resource_include($file_name, $arr = [])
{
    if (is_array($arr) && count($arr)) {
        extract($arr);
    }
    include_once($_SERVER['DOCUMENT_ROOT'] . "/resource/views/$file_name.php");
}

function globalvar($variable)
{
    return $GLOBALS[$variable];
}

function inflector()
{
    $inflector = InflectorFactory::create()->build();
    return $inflector;
}

function session(){
    return new Session();
}