<?php

function requestGET($callback)
{
       if ($_SERVER['REQUEST_METHOD'] === 'GET') {
              $callback();
       } else {
              $response = array("code" => 403, "message" => "Invalid Request");
              echo json_encode($response);
       }
}


function requestPOST($callback)
{
       if ($_SERVER['REQUEST_METHOD'] === 'POST') {
              $callback();
       } else {
              $response = array("code" => 403, "message" => "Invalid Request");
              echo json_encode($response);
       }
}

function requestPUT($callback)
{
       if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
              $callback();
       } else {
              $response = array("code" => 403, "message" => "Invalid Request");
              echo json_encode($response);
       }
}



function requestPATCH($callback)
{
       if ($_SERVER['REQUEST_METHOD'] === 'PATCH') {
              $callback();
       } else {
              $response = array("code" => 403, "message" => "Invalid Request");
              echo json_encode($response);
       }
}

function requestDELETE($callback)
{
       if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
              $callback();
       } else {
              $response = array("code" => 403, "message" => "Invalid Request");
              echo json_encode($response);
       }
}
