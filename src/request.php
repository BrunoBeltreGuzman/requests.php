<?php

namespace Requests\Php;

class Request
{


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

       public static function  get($callback, $middleware = NULL, $isStrict = false)
       {
              if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                     if ($middleware != NULL) {
                            $middleware();
                     }
                     $callback(new Response());
                     exit;
              }

              if ($isStrict) {
                     $response = array(
                            "code" => 405,
                            "message" => "The method specified in the Request-Line is not allowed for the resource identified by the Request-URI.",
                            "method" => "GET"
                     );
                     header("Content-Type: application/json");
                     echo json_encode($response);
                     http_response_code(200);
                     exit;
              }
       }

       public static function  post(
              $callback,
              $middleware = NULL,
              $isStrict = false
       ) {
              if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                     if ($middleware != NULL) {
                            $middleware();
                     }
                     $callback(new Response());
                     exit;
              }

              if ($isStrict) {
                     $response = array(
                            "code" => 405,
                            "message" => "The method specified in the Request-Line is not allowed for the resource identified by the Request-URI.",
                            "method" => "POST"
                     );
                     header("Content-Type: application/json");
                     echo json_encode($response);
                     http_response_code(200);
                     exit;
              }
       }

       public static function  put(
              $callback,
              $middleware = NULL,
              $isStrict = false
       ) {
              if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
                     if ($middleware != NULL) {
                            $middleware();
                     }
                     $callback(new Response());
                     exit;
              }

              if ($isStrict) {
                     $response = array(
                            "code" => 405,
                            "message" => "The method specified in the Request-Line is not allowed for the resource identified by the Request-URI.",
                            "method" => "PUT"
                     );
                     header("Content-Type: application/json");
                     echo json_encode($response);
                     http_response_code(200);
                     exit;
              }
       }

       public static function  patch(
              $callback,
              $middleware = NULL,
              $isStrict = false
       ) {
              if ($_SERVER['REQUEST_METHOD'] === 'PATCH') {
                     if ($middleware != NULL) {
                            $middleware();
                     }
                     $callback(new Response());
                     exit;
              }

              if ($isStrict) {
                     $response = array(
                            "code" => 405,
                            "message" => "The method specified in the Request-Line is not allowed for the resource identified by the Request-URI.",
                            "method" => "PATCH"
                     );
                     header("Content-Type: application/json");
                     echo json_encode($response);
                     http_response_code(200);
                     exit;
              }
       }

       public static function  delete(
              $callback,
              $middleware = NULL,
              $isStrict = false
       ) {
              if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
                     if ($middleware != NULL) {
                            $middleware();
                     }
                     $callback(new Response());
                     exit;
              }

              if ($isStrict) {
                     $response = array(
                            "code" => 405,
                            "message" => "The method specified in the Request-Line is not allowed for the resource identified by the Request-URI.",
                            "method" => "DELETE"
                     );
                     header("Content-Type: application/json");
                     echo json_encode($response);
                     http_response_code(200);
                     exit;
              }
       }
}
