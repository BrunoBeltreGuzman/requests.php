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
