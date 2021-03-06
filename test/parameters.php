

<?php

use Requests\Php\Request;
use Requests\Php\Response;

include __DIR__ . "/../vendor/autoload.php";


// {id}
Request::get(function (Response $response) {
       try {
              $GET = $response->getParameters();
              $data = array('id' => $GET["id"]);
              $response->response($data);
       } catch (Exception $exception) {
              $response->response($exception, 500);
       }
});

// {name}
Request::post(function (Response $response) {
       try {
              $POST = $response->getParameters();
              $data = array('name' => $POST["name"]);
              $response->response($data);
       } catch (Exception $exception) {
              $response->response($exception, 500);
       }
});


// {id}
Request::put(function (Response $response) {
       try {
              $PUT = $response->getParameters();

              $data = array('id' => $PUT["id"]);
              $response->response($data);
       } catch (Exception $exception) {
              $response->response($exception, 500);
       }
});


// {name}
Request::patch(function (Response $response) {
       try {
              $PATCH = $response->getParameters();
              $data = array('name' => $PATCH["name"]);
              $response->response($data);
       } catch (Exception $exception) {
              $response->response($exception, 500);
       }
});


// {id}
Request::delete(function (Response $response) {
       try {
              $DELETE = $response->getParameters();
              $data = array('id' => $DELETE["id"]);
              $response->response($data);
       } catch (Exception $exception) {
              $response->response($exception, 500);
       }
});
