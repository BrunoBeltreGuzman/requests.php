<?php

function requestGET($callback)
{
       if ($_SERVER['REQUEST_METHOD'] === 'GET') {
              $callback();
       } else {
              /*$response = [array(
                     "code" => 400,
                     "message" => "The request cannot be fulfilled due to bad syntax.",
                     "method" => "GET"
              )];
              echo json_encode($response);*/
       }
}


function requestPOST($callback)
{
       if ($_SERVER['REQUEST_METHOD'] === 'POST') {
              $callback();
       }
}

function requestPUT($callback)
{
       if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
              $callback();
       }
}

function requestPATCH($callback)
{
       if ($_SERVER['REQUEST_METHOD'] === 'PATCH') {
              $callback();
       }
}

function requestDELETE($callback)
{
       if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
              $callback();
       }
}
