<?php




use Requests\Php\Request;
use Requests\Php\Response;

include __DIR__ . "/../vendor/autoload.php";

Request::get(function (Response $response) {
       try {
              $response->response("get");
       } catch (Exception $exception) {
              $response->response($exception, 500);
       }
});

Request::post(function (Response $response) {
       try {
              $response->response("post");
       } catch (Exception $exception) {
              $response->response($exception, 500);
       }
});


Request::put(function (Response $response) {
       try {
              $response->response("put");
       } catch (Exception $exception) {
              $response->response($exception, 500);
       }
});

Request::patch(function (Response $response) {
       try {
              $response->response("patch");
       } catch (Exception $exception) {
              $response->response($exception, 500);
       }
});


Request::delete(function (Response $response) {
       try {
              $response->response("delete");
       } catch (Exception $exception) {
              $response->response($exception, 500);
       }
});
