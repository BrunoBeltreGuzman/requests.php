<?php

/*============================================
                                          Response
=============================================*/
function response()
{
       $response = [array(
              'code' => 200,
              "message" => "The request has succeeded.",
       )];
       header("Content-Type: application/json");
       echo json_encode($response);
       http_response_code(200);
}

function responseData($data)
{
       $response = [array(
              'code' => 200,
              "message" => "The request has succeeded.",
              "data" => $data
       )];

       header("Content-Type: application/json");
       echo json_encode($response);
       http_response_code(200);
}

function responseError($error)
{
       $response = [array(
              'code' => 500,
              "message" => "The server encountered an unexpected condition which prevented it from fulfilling the request.",
              "error" => $error
       )];
       header("Content-Type: application/json");
       echo json_encode($response);
       http_response_code(500);
}

function responseExeption($exception)
{
       $response = [array(
              'code' => 500,
              "message" => "The server encountered an unexpected condition which prevented it from fulfilling the request.",
              "exception" => $exception
       )];
       header("Content-Type: application/json");
       echo json_encode($response);
       http_response_code(500);
}

/*============================================
                                          Response Full
=============================================*/
function responseFull($code, $message)
{
       $response = [array(
              'code' => $code,
              "message" => $message,
       )];
       header("Content-Type: application/json");
       echo json_encode($response);
       http_response_code($code);
}

function responseDataFull($code, $message, $data)
{
       $response = [array(
              'code' => $code,
              "message" => $message,
              "data" => $data
       )];
       header("Content-Type: application/json");
       echo json_encode($response);
       http_response_code($code);
}

function responseErrorFull($code, $message, $error)
{
       $response = [array(
              'code' => $code,
              "message" => $message,
              "error" => $error
       )];
       header("Content-Type: application/json");
       echo json_encode($response);
       http_response_code($code);
}

function responseExeptionFull($code, $message, $exception)
{
       $response = [array(
              'code' => $code,
              "message" => $message,
              "exception" => $exception
       )];
       header("Content-Type: application/json");
       echo json_encode($response);
       http_response_code($code);
}


/*============================================
                            Response 200 (OK)
=============================================*/
function response200()
{
       $response = [array(
              'code' => 200,
              "message" => "The request has succeeded."
       )];
       header("Content-Type: application/json");
       echo json_encode($response);
       http_response_code(200);
}


function responseData200($data)
{
       $response = [array(
              'code' => 200,
              "message" => "The request has succeeded.",
              "data" => $data
       )];
       header("Content-Type: application/json");
       echo json_encode($response);
       http_response_code(200);
}


/*============================================
                            Response 300 (Redirect)
=============================================*/
function response300()
{
       $response = [array(
              'code' => 300,
              "message" => "The response to the request can be found under a different URI and SHOULD be retrieved using a request  resource."
       )];
       header("Content-Type: application/json");
       echo json_encode($response);
       http_response_code(300);
}


function responseData300($data)
{
       $response = [array(
              'code' => 300,
              "message" => "The response to the request can be found under a different URI and SHOULD be retrieved using a request  resource.",
              "data" => $data
       )];
       header("Content-Type: application/json");
       echo json_encode($response);
       http_response_code(300);
}

/*============================================
                            Response 400 (Client Error)
=============================================*/
function response400()
{
       $response = [array(
              'code' => 400,
              "message" => "The request cannot be fulfilled due to bad syntax."
       )];
       header("Content-Type: application/json");
       echo json_encode($response);
       http_response_code(400);
}


function responseData400($data)
{
       $response = [array(
              'code' => 400,
              "message" => "The request cannot be fulfilled due to bad syntax.",
              "data" => $data
       )];
       header("Content-Type: application/json");
       echo json_encode($response);
       http_response_code(400);
}

/*============================================
                            Response 403 (Forbidden)
=============================================*/
function response403()
{
       $response = [array(
              'code' => 403,
              "message" => "The server understood the request, but is refusing to fulfill it. Authorization will not help and the request SHOULD NOT be repeated."
       )];
       header("Content-Type: application/json");
       echo json_encode($response);
       http_response_code(403);
}


function responseData403($data)
{
       $response = [array(
              'code' => 403,
              "message" => "The server understood the request, but is refusing to fulfill it. Authorization will not help and the request SHOULD NOT be repeated.",
              "data" => $data
       )];
       header("Content-Type: application/json");
       echo json_encode($response);
       http_response_code(403);
}


/*============================================
                            Response 403 (Forbidden)
=============================================*/
function response500()
{
       $response = [array(
              'code' => 500,
              "message" => "The server encountered an unexpected condition which prevented it from fulfilling the request."
       )];
       header("Content-Type: application/json");
       echo json_encode($response);
       http_response_code(500);
}


function responseData500($data)
{
       $response = [array(
              'code' => 500,
              "message" => "The server encountered an unexpected condition which prevented it from fulfilling the request.",
              "data" => $data
       )];
       header("Content-Type: application/json");
       echo json_encode($response);
       http_response_code(500);
}
