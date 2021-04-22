<?php

/*============================================
                                          Response
=============================================*/
function response($code, $message)
{
       $response = [array(
              'code' => $code,
              "message" => $message
       )];
       echo json_encode($response);
}

function responseData($code, $message, $data)
{
       $response = [array(
              'code' => $code,
              "message" => $message,
              "data" => $data
       )];
       echo json_encode($response);
}

function responseError($code, $message, $error)
{
       $response = [array(
              'code' => $code,
              "message" => $message,
              "error" => $error
       )];
       echo json_encode($response);
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
       echo json_encode($response);
}


function responseData200($data)
{
       $response = [array(
              'code' => 200,
              "message" => "The request has succeeded.",
              "data" => $data
       )];
       echo json_encode($response);
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
       echo json_encode($response);
}


function responseData300($data)
{
       $response = [array(
              'code' => 300,
              "message" => "The response to the request can be found under a different URI and SHOULD be retrieved using a request  resource.",
              "data" => $data
       )];
       echo json_encode($response);
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
       echo json_encode($response);
}


function responseData400($data)
{
       $response = [array(
              'code' => 400,
              "message" => "The request cannot be fulfilled due to bad syntax.",
              "data" => $data
       )];
       echo json_encode($response);
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
       echo json_encode($response);
}


function responseData403($data)
{
       $response = [array(
              'code' => 403,
              "message" => "The server understood the request, but is refusing to fulfill it. Authorization will not help and the request SHOULD NOT be repeated.",
              "data" => $data
       )];
       echo json_encode($response);
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
       echo json_encode($response);
}


function responseData500($data)
{
       $response = [array(
              'code' => 500,
              "message" => "The server encountered an unexpected condition which prevented it from fulfilling the request.",
              "data" => $data
       )];
       echo json_encode($response);
}
