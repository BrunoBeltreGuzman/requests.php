<?php
/*
       MIT License

       Copyright (c) 2021 @BrunoDev

       Permission is hereby granted, free of charge, to any person obtaining a copy
       of this software and associated documentation files (the "Software"), to deal
       in the Software without restriction, including without limitation the rights
       to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
       copies of the Software, and to permit persons to whom the Software is
       furnished to do so, subject to the following conditions:

       The above copyright notice and this permission notice shall be included in all
       copies or substantial portions of the Software.

       THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
       IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
       FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
       AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
       LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
       OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
       SOFTWARE.
*/


/*============================================
                                          Response
=============================================*/
function response()
{
       $response = array(
              'code' => 200,
              "message" => "The request has succeeded.",
       );
       header("Content-Type: application/json");
       echo json_encode($response);
       http_response_code(200);
       exit;
}

function responseData($data)
{
       $response = array(
              'code' => 200,
              "message" => "The request has succeeded.",
              "data" => $data
       );

       header("Content-Type: application/json");
       echo json_encode($response);
       http_response_code(200);
       exit;
}

function responseError($error)
{
       $response = array(
              'code' => 500,
              "message" => "The server encountered an unexpected condition which prevented it from fulfilling the request.",
              "error" => $error
       );
       header("Content-Type: application/json");
       echo json_encode($response);
       http_response_code(500);
       exit;
}

function responseExeption($exception)
{
       $response = array(
              'code' => 500,
              "message" => "The server encountered an unexpected condition which prevented it from fulfilling the request.",
              "exception" => $exception
       );
       header("Content-Type: application/json");
       echo json_encode($response);
       http_response_code(500);
       exit;
}

/*============================================
                                          Response Full
=============================================*/
function responseFull($code, $message)
{
       $response = array(
              'code' => $code,
              "message" => $message,
       );
       header("Content-Type: application/json");
       echo json_encode($response);
       http_response_code($code);
       exit;
}

function responseDataFull($code, $message, $data)
{
       $response = array(
              'code' => $code,
              "message" => $message,
              "data" => $data
       );
       header("Content-Type: application/json");
       echo json_encode($response);
       http_response_code($code);
       exit;
}

function responseErrorFull($code, $message, $error)
{
       $response = array(
              'code' => $code,
              "message" => $message,
              "error" => $error
       );
       header("Content-Type: application/json");
       echo json_encode($response);
       http_response_code($code);
       exit;
}

function responseExeptionFull($code, $message, $exception)
{
       $response = array(
              'code' => $code,
              "message" => $message,
              "exception" => $exception
       );
       header("Content-Type: application/json");
       echo json_encode($response);
       http_response_code($code);
       exit;
}


/*============================================
                            Response 200 (OK)
=============================================*/
function response200()
{
       $response = array(
              'code' => 200,
              "message" => "The request has succeeded."
       );
       header("Content-Type: application/json");
       echo json_encode($response);
       http_response_code(200);
       exit;
}


function responseData200($data)
{
       $response = array(
              'code' => 200,
              "message" => "The request has succeeded.",
              "data" => $data
       );
       header("Content-Type: application/json");
       echo json_encode($response);
       http_response_code(200);
       exit;
}


/*============================================
                            Response 300 (Redirect)
=============================================*/
function response300()
{
       $response = array(
              'code' => 300,
              "message" => "The response to the request can be found under a different URI and SHOULD be retrieved using a request  resource."
       );
       header("Content-Type: application/json");
       echo json_encode($response);
       http_response_code(300);
       exit;
}


function responseData300($data)
{
       $response = array(
              'code' => 300,
              "message" => "The response to the request can be found under a different URI and SHOULD be retrieved using a request  resource.",
              "data" => $data
       );
       header("Content-Type: application/json");
       echo json_encode($response);
       http_response_code(300);
       exit;
}

/*============================================
                            Response 400 (Client Error)
=============================================*/
function response400()
{
       $response = array(
              'code' => 400,
              "message" => "The request cannot be fulfilled due to bad syntax."
       );
       header("Content-Type: application/json");
       echo json_encode($response);
       http_response_code(400);
       exit;
}


function responseData400($data)
{
       $response = array(
              'code' => 400,
              "message" => "The request cannot be fulfilled due to bad syntax.",
              "data" => $data
       );
       header("Content-Type: application/json");
       echo json_encode($response);
       http_response_code(400);
       exit;
}

/*============================================
                            Response 403 (Forbidden)
=============================================*/
function response403()
{
       $response = array(
              'code' => 403,
              "message" => "The server understood the request, but is refusing to fulfill it. Authorization will not help and the request SHOULD NOT be repeated."
       );
       header("Content-Type: application/json");
       echo json_encode($response);
       http_response_code(403);
       exit;
}


function responseData403($data)
{
       $response = array(
              'code' => 403,
              "message" => "The server understood the request, but is refusing to fulfill it. Authorization will not help and the request SHOULD NOT be repeated.",
              "data" => $data
       );
       header("Content-Type: application/json");
       echo json_encode($response);
       http_response_code(403);
       exit;
}


/*============================================
                            Response 500 (Error)
=============================================*/
function response500()
{
       $response = array(
              'code' => 500,
              "message" => "The server encountered an unexpected condition which prevented it from fulfilling the request."
       );
       header("Content-Type: application/json");
       echo json_encode($response);
       http_response_code(500);
       exit;
}


function responseData500($data)
{
       $response = array(
              'code' => 500,
              "message" => "The server encountered an unexpected condition which prevented it from fulfilling the request.",
              "data" => $data
       );
       header("Content-Type: application/json");
       echo json_encode($response);
       http_response_code(500);
       exit;
}
