<?php

require_once "../src/requests.php";


function middleware()
{
       echo 'middleware';
};
$middleware = "middleware";

requestGET(function () {
       echo 'test';
}, $middleware, true);