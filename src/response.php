<?php

namespace Requests\Php;

class Response
{

       // Get Parameters
       public static function  getParameters()
       {
              switch ($_SERVER['REQUEST_METHOD']) {
                     case 'GET':
                            return $_GET;
                            break;

                     case 'POST':
                            return $_POST;
                            break;

                     case 'PUT':
                            $PUT = null;
                            parse_str(file_get_contents("php://input"), $PUT);
                            return $PUT;
                            break;


                     case 'PATCH':
                            $PUT = null;
                            parse_str(file_get_contents("php://input"), $PUT);
                            return $PUT;
                            break;


                     case 'DELETE':
                            $PUT = null;
                            parse_str(file_get_contents("php://input"), $PUT);
                            return $PUT;
                            break;

                     default:
                            $PARAMETERS  = null;
                            parse_str(file_get_contents("php://input"), $PARAMETERS);
                            return $PARAMETERS;
                            break;
              }
       }

       // Post Parameters
       public static function  getPostParameters()
       {
              return $_POST;
       }

       //Put Parameters
       public static function  getPutParameters()
       {
              $PUT = null;
              parse_str(file_get_contents("php://input"), $PUT);
              return $PUT;
       }

       //PaTCH Parameters
       public static function  getPatchParameters()
       {
              $PATCH = null;
              parse_str(file_get_contents("php://input"), $PATCH);
              return $PATCH;
       }

       //Delete Parameters
       public static function  getDeleteParameters()
       {
              $DELETE = null;
              parse_str(file_get_contents("php://input"), $DELETE);
              return $DELETE;
       }

       //Headers Parameters
       public static function  getHeaders()
       {
              $headers = apache_request_headers();
              return $headers;
       }


       /*============================================
                                          Response
=============================================*/
       public static function  response($response = "", $code = 200)
       {
              $data = array(
                     'code' => $code,
                     "response" => $response
              );

              header("Content-Type: application/json");
              echo json_encode($data);
              http_response_code($code);
              exit;
       }
}
