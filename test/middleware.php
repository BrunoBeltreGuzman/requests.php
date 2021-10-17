<?php

use Requests\Php\Request;
use Requests\Php\Response;

include __DIR__ . "/../vendor/autoload.php";


function middleware()
{
       echo 'middleware';
};
$middleware = "middleware";

Request::get(function () {
       echo 'test';
}, $middleware);


Request::post(function () {
       echo 'test';
}, function () {
       echo 'middleware';
});
