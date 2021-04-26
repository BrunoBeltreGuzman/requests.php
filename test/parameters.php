

<?php

require_once "../src/response.php";
require_once "../src/requests.php";
require_once "../src/parameters.php";


// {id}
requestGET(function () {
       try {
              $GET = getGetParameters();
              if ($GET["id"]) {
                     $data = [array('id' => $GET["id"])];
                     responseData($data);
              } else {
                     response400();
              }
       } catch (Exception $exception) {
              responseExeption($exception);
       }
});

// {name}
requestPOST(function () {
       try {
              $POST = getPostParameters();
              if ($POST["name"]) {
                     $data = [array('name' => $POST["name"])];
                     responseData($data);
              } else {
                     response400();
              }
       } catch (Exception $exception) {
              responseExeption($exception);
       }
});


// {id}
requestPUT(function () {
       try {
              $PUT = getPutParameters();
              if ($PUT["id"]) {
                     $data = [array('id' => $PUT["id"])];
                     responseData($data);
              } else {
                     response400();
              }
       } catch (Exception $exception) {
              responseExeption($exception);
       }
});


// {name}
requestPATCH(function () {
       try {
              $PATCH = getPatchParameters();
              if ($PATCH["name"]) {
                     $data = [array('name' => $PATCH["name"])];
                     responseData($data);
              } else {
                     response400();
              }
       } catch (Exception $exception) {
              responseExeption($exception);
       }
});


// {id}
requestDELETE(function () {
       try {
              $DELETE = getDeleteParameters();
              if ($DELETE["id"]) {
                     $data = [array('id' => $DELETE["id"])];
                     responseData($data);
              } else {
                     response400();
              }
       } catch (Exception $exception) {
              responseExeption($exception);
       }
});
