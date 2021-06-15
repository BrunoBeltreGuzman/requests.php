<?php

function requestGET($callback)
{
       if ($_SERVER['REQUEST_METHOD'] === 'GET') {
              $callback();
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


function requestGETStrict($callback)
{
       if ($_SERVER['REQUEST_METHOD'] === 'GET') {
              $callback();
       } else {
              $response = [array(
                     "code" => 400,
                     "message" => "The request cannot be fulfilled due to bad syntax.",
                     "method" => "GET"
              )];
              echo json_encode($response);
       }
}

function requestPOSTStrict($callback)
{
       if ($_SERVER['REQUEST_METHOD'] === 'POST') {
              $callback();
       } else {
              $response = [array(
                     "code" => 400,
                     "message" => "The request cannot be fulfilled due to bad syntax.",
                     "method" => "POST"
              )];
              echo json_encode($response);
       }
}

function requestPUTStrict($callback)
{
       if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
              $callback();
       } else {
              $response = [array(
                     "code" => 400,
                     "message" => "The request cannot be fulfilled due to bad syntax.",
                     "method" => "PUT"
              )];
              echo json_encode($response);
       }
}


function requestPATCHStrict($callback)
{
       if ($_SERVER['REQUEST_METHOD'] === 'PATCH') {
              $callback();
       } else {
              $response = [array(
                     "code" => 400,
                     "message" => "The request cannot be fulfilled due to bad syntax.",
                     "method" => "PATCH"
              )];
              echo json_encode($response);
       }
}


function requestDELETEStrict($callback)
{
       if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
              $callback();
       } else {
              $response = [array(
                     "code" => 400,
                     "message" => "The request cannot be fulfilled due to bad syntax.",
                     "method" => "DELETE "
              )];
              echo json_encode($response);
       }
}
